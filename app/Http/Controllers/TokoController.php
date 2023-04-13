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
        return view('coffee.main.addCafe', [
            'title' => 'Buat ',
            'method' => 'POST',
            'action' => 'my_toko',
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
        if($request->file('icon_url')) {
            $file = $request->file('icon_url');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $toko->icon_url = $filename;
        }
        $toko->id_user = auth()->user()->id;
        $toko->save();
        session(['toko_id' => $toko->id]);
        session(['toko_nama' => $toko->nama]);
        return redirect('/home')->with('msg', 'sukses');
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
        return view('coffee.main.addCafe', [
            'title' => 'Edit ',
            'method' => 'PUT',
            'action' => 'my_toko/'.$id,
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
        if($request->file('icon_url')) {
            $file = $request->file('icon_url');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $toko->icon_url = $filename;
        }
        $toko->id_user = session('user_id');
        $toko->save();
        return redirect('/home')->with('msg', 'sukses');
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
