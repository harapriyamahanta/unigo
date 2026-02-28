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
            return response()->json(['locations' => $locations]);
        } else {
        return view('location.list', [
            'locations' => $locations,
            'page' => 'Locations'
        ]);
        }
    }

    public function store(Request $request)
    {
        $user = new Location();
        $user->address = $request->address;
        //$user->state = $request->state;
        //$user->country = $request->country;
        $user->city = $request->city;
        $user->pincode = $request->pincode;
        $user->save();
        return redirect('/locations');
        
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
    public function destroy(Request $request,$id): RedirectResponse
    {
        $location = Location::find($id)->delete();

        return Redirect::to('/locations');
    }
}
