<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Location;
use App\Models\Zone;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Imports\LocationImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\UserAddress;

class LocationController extends Controller
{
    
    public function list(Request $request): View|JsonResponse
    {   
        if($request->zone){
            $locations = Location::with('zone')->whereHas('zone', function($q)use ($request) {
               return $q->where('zone',$request->zone);
            })->get();
            $zone = Zone::where('zone',$request->zone)->first();
        }else{
            $locations = Location::get();
        }

        

        if ($request->bearerToken()) {
            $locationMapping = [];
            foreach($locations as $loc){
                $newLoc = [
                    "id" => $loc->id,
                    "street" => $loc->address,
                    "city" => $loc->city,
                    "pin" => $loc->pincode,
                    "category" => $loc->category,
                    "isPrimary" => $loc->isPrimary
                ];
                $locationMapping[] = $newLoc;

            }
            return response()->json($locationMapping);
        } else {
        return view('location.list', [
            'locations' => $locations,
            'zone' => $zone,
            'page' => $request->zone.' Locations'
        ]);
        }
    }

    public function zones(Request $request): View|JsonResponse
    {   
        $locations = Zone::get();

        if ($request->bearerToken()) {
            $locationMapping = [];
            foreach($locations as $loc){
                $newLoc = [
                    "id" => $loc->id,
                    "street" => $loc->address,
                    "city" => $loc->city,
                    "pin" => $loc->pincode,
                    "category" => $loc->category,
                    "isPrimary" => $loc->isPrimary
                ];
                $locationMapping[] = $newLoc;

            }
            return response()->json($locationMapping);
        } else {
        return view('location.zones', [
            'locations' => $locations,
            'page' => 'Zones'
        ]);
        }
    }

    public function cities(Request $request): View|JsonResponse
    {   
        $locations = Zone::pluck('zone','zone')->toArray();

            return response()->json([
                "totalCount" => count($locations),
                "cities" => array_Values($locations)
            ]);
        
    }

    public function localaddresses(Request $request): View|JsonResponse
    {   
        $locations = Location::where('city',$request->city)->get();

        $locationMapping = [];
            foreach($locations as $loc){
                $newLoc = [
                    $loc->address,
                    $loc->city .'-'.$loc->pincode
                ];
                $locationMapping[] = implode(',',$newLoc);

            }
            return response()->json($locationMapping);

        
            return response()->json([
                "totalCount" => count($locations),
                "cities" => array_Values($locations)
            ]);
        
    }
    public function store(Request $request)
    {
        if ($request->bearerToken()) {
            if($request->id){
                $user = UserAddress::find($request->id);
                $user->address = $request->street;
                $user->address2 = $request->street;
                $user->city = $request->city;
                $user->pincode = $request->pin;
                $user->category = $request->category;
                $user->isPrimary = $request->isPrimary=='true' ? 'True':'False';
                $user->save();
            }else{
                $user = new UserAddress();
                $user->address = $request->street;
                $user->address2 = $request->street;
                $user->district = $request->street;
                $user->user_id = Auth::user()->id;
                $user->city = $request->city;
                $user->pincode = $request->pin;
                $user->category = $request->category;
                $user->isPrimary = $request->isPrimary=='true' ? 'True':'False';
                $user->save();

            }
            return response()->json([
                "id" => $user->id,
                "message" => "Address saved successfully"
            ]);
        }else{
            if($request->id){
            $user = Location::find($request->id);
            }else{
            $user = new Location();
            $user->zone_id = $request->zone_id;
            }
            $user->address = $request->address;
            $user->address2 = $request->address2;
            $user->city = $request->city;
            $user->pincode = $request->pincode;
            $user->save();
            return redirect()->back();
        }
        
    }

    public function storeZone(Request $request){

        if ($request->bearerToken()) {
            if($request->id){
                $user = Zone::find($request->id);
                $user->zone = $request->zone;
                $user->pincode = $request->pin;
                $user->save();
            }else{
                $user = new Zone();
                $user->zone = $request->zone;
                $user->pincode = $request->pin;
                $user->save();

            }
            return response()->json([
                "id" => $user->id,
                "message" => "Address saved successfully"
            ]);
        }else{
            if($request->id){
                $user = Zone::find($request->id);
            }else{
                $user = new Zone();
            }
            $user->zone = $request->zone;
            $user->pincode = $request->pincode;
            $user->save();
            return redirect('/zones');
        }

    }

    public function importExcelData(Request $request)
    {
        $request->validate([
            'import_file' => [
                'required',
                'file'
            ],
        ]);

        Excel::import(new LocationImport, $request->file('import_file'));

        return redirect()->back()->with('status', 'Imported Successfully');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request,$id): View
    {
        $locations = Location::where('id',$id)->first();
        return view('location.edit', [
            'locations' => $locations,
            'page' => 'Edit Location'
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request,$id): RedirectResponse
    {
        $location = Location::where('id',$id)->first();
        $location->address = $request->address;
        //$location->state = $request->state;
        //$location->country = $request->country;
        $location->city = $request->city;
        $location->pincode = $request->pincode;
        $location->save();

        return redirect('/locations')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request,$id)//: RedirectResponse
    {
        $location = Location::find($id)->delete();

        if ($request->bearerToken()) {
            return response()->json([
                "message" => "Zones deleted successfully"
            ]);
        }

        return Redirect::to('/locations');
    }

    public function zoneDelete(Request $request,$id){

        $location = Zone::find($id)->delete();

        if ($request->bearerToken()) {
            return response()->json([
                "message" => "Zones deleted successfully"
            ]);
        }

        return Redirect::to('/zones');

    }
}
