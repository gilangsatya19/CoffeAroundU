<?php

namespace App\Http\Controllers;

use App\Http\Resources\LoginResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserAPI extends Controller
{
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'phone_number' => 'required|unique:users',
            'address' => 'required',
            'role' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);
        return response()->json(['data' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->save();
        return response()->json(['data' => $user]);
    }
    public function me(){
        // $user = User::find(auth()->user()->id);
        // $toko = User::find(auth()->user()->id)->toko;
        $user = User::find(auth()->user()->id);
        // dump($user);
        // dump($user->toko);
        // dd($toko);
        return response()->json(['data' => $user->toko]);
        
    }
}
