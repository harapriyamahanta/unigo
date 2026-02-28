<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\LocationController;

Route::get('/', function () {
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/categories', [CategoryController::class, 'list'])->name('category.list');
    Route::post('/store-category', [CategoryController::class, 'store'])->name('category.store');
     Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/sub-categories/{id}', [CategoryController::class, 'subcategorylist'])->name('subcategory.list');
    Route::post('/store-subcategories', [CategoryController::class, 'storesubcategory'])->name('subcategory.store');
     Route::get('/sub-category/delete/{id}', [CategoryController::class, 'subcatdestroy'])->name('subcategory.delete');
    Route::get('/sub-category/edit/{id}', [CategoryController::class, 'subcatedit'])->name('subcategory.edit');
    Route::post('/sub-category/update/{id}', [CategoryController::class, 'subcatupdate'])->name('subcategory.update');
    Route::get('/vendors', [VendorController::class, 'list'])->name('vendor.list');
    Route::get('/create-vendor', [VendorController::class, 'create'])->name('vendor.create');
    Route::get('/edit-vendor/{id}', [VendorController::class, 'edit'])->name('vendor.edit');
    Route::post('/store-vendor', [VendorController::class, 'store'])->name('vendor.store');
    Route::post('/update-vendor/{id}', [VendorController::class, 'update'])->name('vendor.update');
    Route::get('/locations', [LocationController::class, 'list'])->name('location.list');
    Route::post('/store-location', [LocationController::class, 'store'])->name('location.store');
    Route::get('/locations/delete/{id}', [LocationController::class, 'destroy'])->name('location.delete');
    Route::get('/locations/edit/{id}', [LocationController::class, 'edit'])->name('location.edit');
    Route::post('/locations/update/{id}', [LocationController::class, 'update'])->name('location.update');
    Route::post('upload-location',[LocationController::class,'importExcelData']);
});

require __DIR__.'/auth.php';
