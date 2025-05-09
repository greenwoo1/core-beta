<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
        $title = fake() ->unique() ->words(rand(1, 30), true);
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'SKU' => fake() -> unique() -> ean13(),
            'description' => fake() ->boolean() ? fake()->sentences(rand(1, 5), true) : null,
            'price' => fake() ->randomFloat(2, 10,500),
            'discount' => fake() ->boolean() ? fake()->random(10,50) : null,
            'quantity' => rand(0, 50),
            'thumbnail' => 'test'

        ];
    }
}
