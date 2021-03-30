<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Suplier;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(50)->create()
        ->each(function($product) {
            $randomFields= Suplier::all()->random( rand(0, 4) )->pluck('id');
            $product->suplier()->attach($randomFields);
        });
    }
}

