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
use App\Models\UserAddress;
use App\Models\UserSubCategory;
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
    public function edit(Request $request,$id): View
    {   
        $user = User::with('userdetail','useraddress','usersubcategory')->find($id);
        $subcategories = SubCategory::where('category_id',$user->userdetail->category_id)->get();
        return view('vendor.edit', [
            'vendor' => $user,
            'subcategories' => $subcategories,
            'usersubcat' => $user?->usersubcategory->pluck('subcategory_id')->toArray(),
            'page' => 'Edit Vendor',
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request,$id): RedirectResponse
    {   
        if($request->section == 'userdetail'){
            $userdetail = UserDetail::where('user_id',$id)->first();
            if(!$userdetail){
            $userdetail = new UserDetail();
            $userdetail->user_id = $id;
            }
            $userdetail->first_name = $request->first_name;
            $userdetail->last_name = $request->last_name;
            $userdetail->dob = $request->dob;
            $userdetail->gender = $request->gender;
            $userdetail->phone = $request->phone;
            $userdetail->save();
        }

         if($request->section == 'address'){
            $useraddress = UserAddress::where('user_id',$id)->first();
            if(!$useraddress){
            $useraddress = new UserAddress();
            $useraddress->user_id = $id;
            }
            $useraddress->address = $request->address;
            $useraddress->city = $request->city;
            $useraddress->state = $request->state;
            $useraddress->district = $request->country;
            $useraddress->pincode = $request->pincode;
            $useraddress->save();
        }
        if($request->section == 'subcategory'){
            //dd($request->all());
             $userassociatesubcategory = UserSubCategory::where('user_id',$id)->delete();
             foreach($request->userSubcat as $key =>  $subcat){
                $userassociatesubcategory = new UserSubCategory();
                $userassociatesubcategory->user_id = $id;
                $userassociatesubcategory->category_id = $request->user_category_id;
                $userassociatesubcategory->subcategory_id = $subcat;
                $userassociatesubcategory->save();

             }
            

        }

        return Redirect::to('edit-vendor/'.$id)->with('status', 'profile-updated');
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
