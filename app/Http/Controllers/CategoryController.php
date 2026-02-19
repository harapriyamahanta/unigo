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

class CategoryController extends Controller
{
    
    public function list(Request $request): View
    {   
        $categories = Category::get();
        return view('categories.list', [
            'categories' => $categories,
            'page' => 'Categories'
        ]);
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->category;
        $category->save();
        return redirect('/categories');
        
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
     /**
     * Display the user's profile form.
     */
    public function edit(Request $request,$id): View
    {
        $category = Category::where('id',$id)->first();
        return view('categories.edit', [
            'category' => $category,
            'page' => 'Edit Category'
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request,$id): RedirectResponse
    {
        $location = Category::where('id',$id)->first();
        $location->name = $request->category;
        $location->save();

        return redirect('/categories')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request,$id): RedirectResponse
    {
        $category = Category::find($id);
        $isexistUser = UserDetail::where('category_id',$id)->count();
        if(!$isexistUser){
            $category->delete();
        }
        
        //->delete();

        return Redirect::to('/categories');
    }
}
