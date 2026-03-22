<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function list(Request $request): View|JsonResponse
    {   
        $blogs = Blog::get();

        
        return view('blogs.list', [
            'blogs' => $blogs,
            'page' => 'Blog'
        ]);
        
    }

    public function store(Request $request)
    {   
        $blog = new Blog();
        $blog->tag = $request->tag;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->date = $request->date;
        if($request->image){
           $imageName = time().'.'.$request->image->extension();  

            Image::load($request->image->path())
                ->optimize()
                ->save(public_path('storage/banners/'). $imageName);
            
            $blog->imageUrl = url('storage/blogs/'. $imageName);
            
        }
        $blog->save();
        
        return redirect('/blogs');
        
    }

    public function destroy(Request $request,$id): RedirectResponse
    {
        $banner = Blog::find($id);
        if($banner){
            $banner->delete();
        }
        return Redirect::to('/blogs');
    }
}
