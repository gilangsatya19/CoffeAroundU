<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $data["users"] = User::get();
        return view('coffee.main.home', $data);
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
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone_number = $request->phone_number;
        $user->address = $request->phone_number;
        $user->role = $request->role;
        // $user->idToko = NULL;
        $user->save();
        return redirect('/home')->with('msg', 'sukses');
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
            'action' => 'home/edit/'.$id,
            'data' => Product::find($id),
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
        $user->password = $request->password;
        $user->phone_number = $request->phone_number;
        $user->role = $request->role;
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
