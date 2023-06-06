<?php

namespace App\Http\Controllers;

use App\Http\Resources\LoginResource;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginAPI extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $auth = Auth::user();
            $user = User::where('email', $request->email)->first();

            return new LoginResource($user);
        }
        return response()->json([
            'success' => false,
            'message' => 'Login Failed',
            'data' => null
        ]);
        
        
        // return response()->json(['data' => $user]);
        // return LoginResource::$this->user;
        // return new LoginResource(User::find($user->id));
        
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    }
}
