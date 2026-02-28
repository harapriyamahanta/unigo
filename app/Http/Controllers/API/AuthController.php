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
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:10|unique:users'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $otp = rand(1000,9999);
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        //$user->type = $request->type;
        $user->verifyOtp = $otp;
        $user->save();

       // $token = $user->createToken('MyAppToken')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'User registered successfully.',
            "otp" => $otp
            //'token' => $token,
            //'user' => $user,
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
            //'user' => $request->user(),
            "name" => $request->user()->name,
            "phone" => $request->user()->phone,
            "email" => $request->user()->email,
            "gender" =>$request->user()?->userdetail?->gender,
            "dob"=> $request->user()?->userdetail?->dob, // DDMMYYYY (UI shows as DD/MM/YYYY)
            "image"=> $request->user()?->userdetail?->profileImage
        ]);
    }

    public function home(Request $request){
        return response()->json([
            'banner' => [],
            'categories' => [],
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = $request->user();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();
        $userDetail = $request->user()->userdetail;
        if(!$userDetail){
            $userDetail = new UserDetail();
            $userDetail->user_id = $user->id;
        }
        $userDetail->gender = $request->gender;
        $userDetail->dob = $request->dob;
        $userDetail->profileImage = $request->image;
        $userDetail->save();
        return response()->json([
            'success' => true,
            'message' => 'Profile updated successfully',
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