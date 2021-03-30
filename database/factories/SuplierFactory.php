<?php

namespace Database\Factories;

use App\Models\Suplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Suplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'created_at' => time(),
            'updated_at' => time()
        ];
    }
}
