<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductAPI extends Controller
{
    public function index()
    {
        $prod = Product::all();

        return ProductResource::collection($prod);
    }
    public function show($id)
    {
        $prod = Product::find($id);
        return response()->json(['data' => $prod]);
    }
    public function getProductByToko($id)
    {
        $toko = Toko::find($id);
        $data = $toko->products;
        // return response()->json(['data' => $data]);
        return ProductResource::collection($data);
    }
}
