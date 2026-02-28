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
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Imports\LocationImport;
use Maatwebsite\Excel\Facades\Excel;

class LocationController extends Controller
{
    
    public function list(Request $request): View|JsonResponse
    {   
        $locations = Location::get();

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
            'page' => 'Locations'
        ]);
        }
    }


    public function cities(Request $request): View|JsonResponse
    {   
        $locations = Location::pluck('city','city')->toArray();

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
                $user = Location::find($request->id);
                $user->address = $request->street;
                $user->city = $request->city;
                $user->pincode = $request->pin;
                $user->category = $request->category;
                $user->isPrimary = $request->isPrimary=='true' ? 'True':'False';
                $user->save();
            }else{
                $user = new Location();
                $user->address = $request->street;
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
            $user = new Location();
            $user->address = $request->address;
            $user->city = $request->city;
            $user->pincode = $request->pincode;
            $user->save();
            return redirect('/locations');
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
                "message" => "Address deleted successfully"
            ]);
        }

        return Redirect::to('/locations');
    }
}
