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


class BookingController extends Controller
{
    
    public function list(Request $request): View
    {   
        $vendors = [];//Booking::with('customer','vendor')->get();
        return view('booking.list', [
            'vendors' => $vendors,
            'page' => 'All Bookings'
        ]);
    }

     public function invoice(Request $request,$id): View
    {   
        
        return view('booking.invoice', [
           
        ]);
    }

    
}
