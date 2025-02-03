<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class Detailpenjualan extends Model
{
    use HasFactory;
     protected $guarded = [];

     public function produk(){
        return $this->belongsTo(Produk::class);
     }
}
