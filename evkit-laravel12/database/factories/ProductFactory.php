<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'type_id' => ProductType::factory(),
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(4),
            'img' => 'img/placeholder.png',
            'price' => $this->faker->randomFloat(2, 1000, 10000),
            'currency' => 'UAH',
            'priority' => 1,
            'available' => 1,
        ];
    }
}