<?php

namespace App\Http\Resources;

use App\Models\Toko;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $toko = Toko::find($this->toko_id);
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'deskripsi_produk' => $this->deskripsi_produk,
            'harga' => $this->harga,
            'rating' => $this->rating,
            'foto' => $this->foto,
            'available' => $this->available,
            'reason' => $this->reason,
            'toko_id' => $this->toko_id,
            'nama_toko' => $toko->nama,

        ];

    }
}
