<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Location;
use Illuminate\Support\Facades\Hash;


class LocationController extends Controller
{
    
    public function list(Request $request): View
    {   
        $locations = Location::get();
        return view('location.list', [
            'locations' => $locations,
            'page' => 'Locations'
        ]);
    }

    public function store(Request $request)
    {
        $user = new Location();
        $user->address = $request->address;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->pincode = $request->pincode;
        $user->save();
        return redirect('/locations');
        
    }

    public function storesubcategory(Request $request)
    {
        $subcategory = new SubCategory();
        $subcategory->name = $request->subcategory;
        $subcategory->category_id = $request->category;
        $subcategory->save();
        return redirect('/sub-categories/'.$request->category);
        
    }

    public function subcategorylist(Request $request,$categoryId): View
    {   
        $subcategories = SubCategory::where('category_id',$categoryId)->get();
        $categories = Category::find($categoryId);
        return view('subcategories.list', [
            'subcategories' => $subcategories,
            'category' => $categories,
            'page' => $categories->name
        ]);
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
