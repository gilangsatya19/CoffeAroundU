<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductAPI extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        $toko = Toko::find($user->toko->id);

        return response()->json(['data' => $toko->products]);
    }
    public function store(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $prod = new Product;
        $prod->nama = $request->nama;
        $prod->deskripsi_produk = $request->deskripsi_produk;
        $prod->harga = $request->harga;
        $prod->rating = 0;
        $prod->foto = $request->foto;   
        // if($request->file('foto')) {
        //     $file = $request->file('foto');
        //     $filename= date('YmdHi').$file->getClientOriginalName();
        //     $file->move(public_path('public/Image'), $filename);
        //     $prod->foto = $filename;
        // }
        $prod->available = $request->available;
        $prod->reason = '';
        $prod->toko_id = $user->toko->id;
        $prod->save();
        return response()->json(['data' => $prod]);
    }
    
    public function show($id)
    {
        $prod = Product::find($id);
        return response()->json(['data' => $prod]);
    }
}
