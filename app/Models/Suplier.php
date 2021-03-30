<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Products::class,'product_suplier','suplier_id','products_id');
    }
}
