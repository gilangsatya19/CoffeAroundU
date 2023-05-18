<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;
use App\Models\User;


class TokoAPI extends Controller
{
    public function index()
    {
        
        $user = User::find(auth()->user()->id);
        return response()->json(['data' => $user->toko]);
    }

    public function store(Request $request)
    {
        $toko = new Toko;
        $toko->nama = $request->nama;
        $toko->map = $request->map;
        // if($request->file('icon_url')) {
        //     $file = $request->file('icon_url');
        //     $filename= date('YmdHi').$file->getClientOriginalName();
        //     $file->move(public_path('public/Image'), $filename);
        //     $toko->icon_url = $filename;
        // }
        $toko->icon_url = $request->icon_url;
        $toko->user_id = auth()->user()->id;
        $toko->save();
        
        return response()->json(['data' => $toko]);

    }
   
}
