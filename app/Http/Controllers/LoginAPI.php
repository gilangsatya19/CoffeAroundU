<?php

namespace App\Http\Controllers;

use App\Http\Resources\LoginResource;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginAPI extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        
        
        // return response()->json(['data' => $user]);
        // return LoginResource::$this->user;
        // return new LoginResource(User::find($user->id));
        return new LoginResource($user);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    }
}
