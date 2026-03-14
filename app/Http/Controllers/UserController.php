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
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    
    public function list(Request $request): View
    {   
        $vendors = User::with('userdetail','useraddress')->
        where('type','user')->get();
        return view('users.list', [
            'vendors' => $vendors,
            'page' => 'Vendors'
        ]);
    }

     public function profile(Request $request,$id): View
    {   
        $user = User::with('userdetail','homeaddress')->find($id);
        //$subcategories = SubCategory::where('category_id',$user->userdetail->category_id)->get();
        return view('users.profile', [
            'user' => $user,
            //'subcategories' => $subcategories,
            'usersubcat' => $user?->usersubcategory ?  $user?->usersubcategory?->pluck('subcategory_id')?->toArray():[],
            'page' => $user->name,
        ]);
    }

    
}
