<?php

namespace App\Http\Controllers;

use App\Http\Resources\TokoResource;
use Illuminate\Http\Request;
use App\Models\Toko;
use App\Models\User;


class TokoAPI extends Controller
{
    public function index()
    {
        $toko = Toko::all();

        return TokoResource::collection($toko);
    }
    
    public function show($id)
    {
        $toko = Toko::find($id);

        return new TokoResource($toko);
    }
    

   
}
