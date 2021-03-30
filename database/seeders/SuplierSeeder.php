<?php

namespace Database\Seeders;

use App\Models\Suplier;
use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Suplier::factory(5)->create();
    }
}
