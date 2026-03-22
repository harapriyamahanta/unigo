<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use Spatie\Image\Image;

class OfferController extends Controller
{
    public function list(Request $request)
    {   
        $offers = Offer::get();

        
        return view('offers.list', [
            'offers' => $offers,
            'page' => 'Offers'
        ]);
        
    }

    public function store(Request $request)
    {   
        if($request->id){
            $offer = Offer::find($request->id);
        }else{
            $offer = new offer();
        }
        $offer->type = $request->type;
        //$offer->vendor_id = $request->vendor_id;
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->startDate = $request->startDate;
        $offer->endDate = $request->endDate;
        $offer->code = $request->code;
        $offer->term = $request->terms;
        $offer->companyName = $request->companyName;
        $offer->phone = $request->phone;
        $offer->website = $request->website;
        $offer->address = $request->address;
        if($request->image){
           $imageName = time().'.'.$request->image->extension();  

            Image::load($request->image->path())
                ->optimize()
                ->save(public_path('storage/offers/'). $imageName);
            
            $offer->image = url('storage/offers/'. $imageName);
            
        }
        if($request->companyLogo){
           $imageNamecompanyLogo = time().'.'.$request->companyLogo->extension();  

            Image::load($request->companyLogo->path())
                ->optimize()
                ->save(public_path('storage/offers/'). $imageNamecompanyLogo);
            
            $offer->companyLogo = url('storage/offers/'. $imageNamecompanyLogo);
            
        }
        $offer->save();
        
        return redirect('/offers');
        
    }

    public function destroy(Request $request,$id): RedirectResponse
    {
        $banner = Offer::find($id);
        if($banner){
            $banner->delete();
        }
        return Redirect::to('/offers');
    }
}
