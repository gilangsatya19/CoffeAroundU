<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $fillable = [
        'harga_total',
        'user_id',
        'toko_id',
        
    ];
    public function detail()
    {
        return $this->hasOne(DetailTransaction::class);
    }

}
