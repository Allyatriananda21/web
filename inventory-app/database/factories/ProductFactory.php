<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->first()?->id ?? Category::factory(),
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->numberBetween(1000000, 25000000),
            'stock' => $this->faker->numberBetween(1, 50),
            'description' => $this->faker->sentence(8),
            'status' => $this->faker->randomElement(['tersedia', 'habis', 'preorder']),
        ];
    }
}
