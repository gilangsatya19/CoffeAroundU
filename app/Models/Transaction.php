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
        
    ];
    public function detail()
    {
        return $this->hasOne(DetailTransaction::class);
    }
    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
