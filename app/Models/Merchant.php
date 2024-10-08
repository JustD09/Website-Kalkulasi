<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $table = 'merchant';
    protected $fillable = [
        'nama_merchant',
        'tanggal',
        'order',
        'rating',
        'harga_jual',
        'delivery',
        'weight_order',
        'promo',
    ];
}
