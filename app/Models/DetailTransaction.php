<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'pembeli',
        'transaction_id',
    ];
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
