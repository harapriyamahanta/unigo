<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\SubCategory;
use App\Models\UserDetail;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class VendorController extends Controller
{
    
    public function list(Request $request): View
    {   
        $vendors = User::with('userdetail','useraddress')->
        where('type','vendor')->get();
        return view('vendor.list', [
            'vendors' => $vendors,
            'page' => 'Vendors'
        ]);
    }

    public function store(Request $request)
    {
        try{  
        DB::beginTransaction();
            $user = new User();
            $user->name = $request->username;
            $user->email = $request->email;
            $user->type = 'vendor';
            $user->password = Hash::make($request->password);
            $user->save();
            $profile_image = '';
            $userdetail = new UserDetail();
            $userdetail->first_name = $request->first_name;
            $userdetail->last_name = $request->last_name;
            $userdetail->dob = $request->dob;
            $userdetail->user_id = $user->id;
            $userdetail->gender = $request->gender;
            $userdetail->phone = $request->phone;
            $userdetail->save();
            DB::commit();
            return redirect('/vendors');
            
        }catch(Exception $e){

            DB::rollback();
            echo $e->getMessage();
        }
        
    }

    public function create(Request $request): View
    {
        return view('vendor.add', [
            'page' => 'Add Vendor',
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
