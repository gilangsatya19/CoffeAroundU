<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaction;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionAPI extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        $toko = Toko::find($user->toko->id);
        return response()->json(['data' => $toko->transactions]);
    }

    public function show($id)
    {
        $data = DetailTransaction::find($id);
        return response()->json(['data' => $data]);
    }
}
