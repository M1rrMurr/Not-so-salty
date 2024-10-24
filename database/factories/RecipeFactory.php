<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->realText(10),
            'intro' => fake()->realText(30),
            'instruction' => fake()->realText(300),
            'image' => "https://picsum.photos/seed/" . rand(1000, 10000) . "/400/400",

        ];
    }
}
