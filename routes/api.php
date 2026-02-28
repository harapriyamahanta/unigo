<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\LocationController;

Route::post('/signup', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/verify', [AuthController::class, 'verify']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/profile', [AuthController::class, 'updateProfile']);
    Route::get('/address', [LocationController::class, 'list']);
    Route::post('/address', [LocationController::class, 'store']);
    Route::delete('/address/{id}', [LocationController::class, 'destroy']);
    Route::get('/cities', [LocationController::class, 'cities']);
    Route::get('/localaddresses', [LocationController::class, 'localaddresses']);
    Route::get('/home', [AuthController::class, 'home']);
    
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

