<?php

namespace App\Http\Resources;

use App\Models\Toko;
use Illuminate\Http\Resources\Json\JsonResource;

class TokoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $toko = Toko::find($this->id);
        return [
            "id" => $this->id,
            "nama" => $this->nama,
            "latitude" => $this->latitude,
            "longitude" => $this->longitude,
            "address" => $toko->user->address,
            "icon_url" => $this->icon_url,
        ];
    }
}
