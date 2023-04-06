<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('coffee.main.home', [
            'data' => Product::where('id_toko', session("toko_id"))->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('coffee.main.addCoffee', [
            'title' => 'Add ',
            'method' => 'POST',
            'action' => 'my_products',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $prod = new Product;
        $prod->nama = $request->nama;
        $prod->deskripsi_produk = $request->deskripsi_produk;
        $prod->harga = $request->harga;
        $prod->rating = 0;
        $prod->foto = $request->foto;   
        $prod->available = $request->available;
        $prod->reason = '';
        $prod->id_toko = session('toko_id');
        $prod->save();
        return redirect('/my_products')->with('msg', 'sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        return Product::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        return view('coffee.main.addCoffee', [
            'title' => 'Edit ',
            'method' => 'PUT',
            'action' => 'my_products/'.$id,
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
        $prod = Product::find($id);
        $prod->nama = $request->nama;
        $prod->deskripsi_produk = $request->deskripsi_produk;
        $prod->has_customization = $request->has_customization;
        $prod->harga = $request->harga;
        $prod->rating = 0;
        $prod->foto = $request->foto;
        $prod->available = $request->available;
        $prod->reason = '';
        $prod->id_toko = session('toko_id');
        $prod->save();
        return redirect('/my_products')->with('msg', 'sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/my_products')->with('msg', 'sukses');
    }
}
