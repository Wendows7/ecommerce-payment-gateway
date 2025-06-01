<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StockProduct>
 */
class StockProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productIds = Product::pluck('id')->toArray();
        $sizes = [39, 40, 41, 42, 43];

        return [
            'stock' => fake()->numberBetween(10, 50),
        ];
//            'size_39' => random_int(5, 20),
//            'size_40' => random_int(5, 20),
//            'size_41' => random_int(5, 20),
//            'size_42' => random_int(5, 20),
//            'size_43' => random_int(5, 20),
    }
}
