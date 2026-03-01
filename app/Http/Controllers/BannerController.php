<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\UserDetail;
use App\Models\Banner;
use Spatie\Image\Image;

class BannerController extends Controller
{
    
    public function list(Request $request): View|JsonResponse
    {   
        $banners = Banner::get();

        
        return view('banners.list', [
            'banners' => $banners,
            'page' => 'Banners'
        ]);
        
    }

    public function store(Request $request)
    {   
        if($request->image){
           $imageName = time().'.'.$request->image->extension();  

        Image::load($request->image->path())
                ->optimize()
                ->save(public_path('storage/banners/'). $imageName);
            $banners = new Banner();
            $banners->banner = url('storage/banners/'. $imageName);
            $banners->save();
        }
        
        return redirect('/banners');
        
    }

    
}
