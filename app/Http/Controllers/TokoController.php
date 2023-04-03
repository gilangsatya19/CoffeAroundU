<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('', [
            'data' => Toko::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('', [
            'title' => 'Buat Toko',
            'method' => 'POST',
            'action' => 'home',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $toko = new Toko;
        $toko->nama = $request->nama;
        $toko->map = $request->map;
        $toko->icon_url = $request->icon_url;
        $toko->save();
        return redirect('\home')->with('msg', 'sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Toko::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        return view('', [
            'title' => 'Edit Toko',
            'method' => 'PUT',
            'action' => 'home/'.$id,
            'data' => Toko::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *  
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $toko = Toko::find($id);
        $toko->nama = $request->nama;
        $toko->map = $request->map;
        $toko->icon_url = $request->icon_url;
        $toko->save();
        return redirect('\home')->with('msg', 'sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Toko::destroy($id);
        return redirect('\home')->with('msg', 'sukses');
    }
}
