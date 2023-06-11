<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResource;
use App\Models\DetailTransaction;
use App\Models\Product;
use App\Models\Toko;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionAPI extends Controller
{
    public function store(Request $request)
    {

        $prod = Product::find($request->prod_id);
        $user_id = $prod->toko->user->id;
        $transaksi = new Transaction;
        $transaksi->harga_total = $prod->harga;
        $transaksi->user_id = $user_id;
        $transaksi->save();
        $detail = new DetailTransaction;
        $pembeli = User::find($request->user_id);
        $detail->nama = $pembeli->name;
        $detail->transaction_id = $transaksi->id;
        $detail->product_id = $request->prod_id;
        $detail->save();
        return response()->json(['success' => true, 'message' => 'Transaksi Berhasil!', 'detail' => $detail, 'transaksi' => $transaksi]);
        // return response()->json(['data'=> $detail]);

    }
    public function getTransactionByUser($id){
        $user = User::find($id);
        $data = $user->transactions;
        return TransactionResource::collection($data);

    }
}
