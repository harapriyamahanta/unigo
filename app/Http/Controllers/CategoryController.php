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
