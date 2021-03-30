<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function suplier()
    {
        return $this->belongsToMany(Suplier::class,'product_suplier','products_id','suplier_id');
    }
}
