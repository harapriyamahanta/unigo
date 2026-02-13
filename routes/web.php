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
    Route::get('/sub-categories/{id}', [CategoryController::class, 'subcategorylist'])->name('subcategory.list');
    Route::post('/store-subcategories', [CategoryController::class, 'storesubcategory'])->name('subcategory.store');
    Route::get('/vendors', [VendorController::class, 'list'])->name('vendor.list');
    Route::get('/create-vendor', [VendorController::class, 'create'])->name('vendor.create');
    Route::post('/store-vendor', [VendorController::class, 'store'])->name('vendor.store');
    Route::get('/locations', [LocationController::class, 'list'])->name('location.list');
    Route::post('/store-location', [LocationController::class, 'store'])->name('location.store');
});

require __DIR__.'/auth.php';
