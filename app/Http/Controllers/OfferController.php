<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
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

    public function destroy(Request $request,$id): RedirectResponse
    {
        $banner = Banner::find($id);
        if($banner){
            $banner->delete();
        }
        return Redirect::to('/banners');
    }
}
