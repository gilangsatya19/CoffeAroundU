<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        
        return view('coffee.main.home', [
            'data' => Product::where('id_toko', session("toko_id"))->get(),
            'toko' => Toko::find(session('toko_id'))
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('coffee.signUp', [
            'title' => 'Tambah akun',
            'method' => 'POST',
            'action' => 'home'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
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
        User::create($validatedData);
        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->phone_number = $request->phone_number;
        // $user->address = $request->address;
        // $user->role = $request->role;
        // // $user->idToko = NULL;
        // $user->save();
        // session(['user_id' => $user->id]);
        return redirect('/login')->with('success', 'Registrasi sukses!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        return view('coffee.main.editProfile', [
            'title' => 'Edit Profile',
            'method' => 'PUT',
            'action' => '/home/'.$id,
            'data' => User::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        // $user->password = $request->password;
        // $user->role = $request->role;
        // $user->idToko = NULL;
        $user->save();
        return redirect('/home')->with('msg', 'sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('\home')->with('msg', 'sukses');
    }
    
       
}
