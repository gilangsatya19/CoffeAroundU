<?php

namespace App\Http\Resources;

use App\Models\Product;
use App\Models\Toko;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $detail = $this->detail;
        $prod = Product::find($detail->product_id);
        $toko = $prod->toko;
        return [
            "transaction_id" => $this->id,
            "harga_total" => $this->harga_total,
            "user_id" => $this->user_id,
            "detail_id" => $detail->id,
            "nama_pembeli" => $detail->nama,
            "product_id" => $prod->id,
            "nama_product" => $prod->nama,
            "rating_product" => $prod->rating,
            "deskripsi_produk" => $prod->deskripsi_produk,
            "harga" => $prod->harga,
            "foto" => $prod->foto,
            "toko_id" => $prod->toko_id,
            "nama_toko" => $toko->nama,
        ];
    }
}
