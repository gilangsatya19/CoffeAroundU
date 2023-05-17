<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;


class TokoAPI extends Controller
{
    public function index()
    {
        $tokos = Toko::all();
        return response()->json($tokos);
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
        $toko->id_user = auth()->user()->id;
        $toko->save();
        session(['toko_id' => $toko->id]);
        session(['toko_nama' => $toko->nama]);
        return response()->json($toko);

    }
    // public function cek_session()
    // {
    //     $tes = session('toko_id');

    //     return response()->json($tes);
    // }
}
