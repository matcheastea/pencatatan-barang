<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detailpenjualan;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function detailpenjualans(){
        return $this->hasMany(Detailpenjualan::class);
    }

}
