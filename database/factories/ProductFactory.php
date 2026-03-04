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
        $brands = ['Nike', 'Apple', 'Sony', 'Samsung', 'Logitech', 'Adidas'];
        $colors = ['Midnight Black', 'Arctic White', 'Space Gray', 'Forest Green', 'Ocean Blue'];
        $types = ['Wireless Headphones', 'Smartphone', 'Mechanical Keyboard', 'Running Shoes', 'Smartwatch'];
        $sizes = ['Small', 'Medium', 'Large', 'XL'];

        return [
            'name' => fake()->randomElement($brands) . ' ' . 
                  fake()->randomElement($colors) . ' ' . 
                  fake()->randomElement($types) . ' (' . 
                  fake()->randomElement($sizes) . ')',
            'price' => fake()->randomFloat(2, 10, 1000),
            'category' => fake()->randomElement(['Electronics', 'Apparel', 'Home', null]),
        ];
    }
}
