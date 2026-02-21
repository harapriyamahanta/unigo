<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class AuthController extends Controller
{
    // User Registration API
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string|phone|max:10|unique:users'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone
        ]);
        $user->type = $request->type;
        $user->save();

        $token = $user->createToken('MyAppToken')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'User registered successfully.',
            'token' => $token,
            'user' => $user,
        ]);
    }

    // User Login API
    public function login(Request $request)
    {
        $otp = rand(1000,9999);

        $user = User::where('phone',$request->phone)->first();
        $user->verifyOtp = $otp;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'OTP sent successfully',
            'otp' => $otp
        ],200);
    }
    public function verify(Request $request)
    {
        // if (!Auth::attempt($request->only('phone', 'verifyOtp'))) {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }

        $user = User::where('phone',$request->phone)->where('verifyOtp',$request->otp)->first();;
        if(!$user){
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $token = $user->createToken('MyAppToken')->plainTextToken;
        if($token){
            $user->verifyOtp = '';
            $user->save();
        }

        return response()->json([
            'success' => true,
            'message' => 'OTP verified successfully',
            'token' => $token,
            //'user' => $user,
        ]);
    }

    // User Profile API (Protected)
    public function profile(Request $request)
    {
        return response()->json([
            'success' => true,
            'user' => $request->user(),
        ]);
    }

    // User Logout API
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logout successful.',
        ]);
    }
}