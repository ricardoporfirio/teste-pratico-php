<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'cod' => md5($this->faker->name.rand(1, 30000)),
            'price' => $this->faker->numberBetween(100, 2500),
            'created_at' => time(),
            'updated_at' => time()
        ];
    }
}
