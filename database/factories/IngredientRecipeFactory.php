<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IngredientRecipe>
 */
class IngredientRecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'recipe_id' => rand(1, 10),
            'ingredient_id' => rand(1, 10),
            'measurement' => fake()->randomElement(['kg', 'spoon', 'tea-spoon']),
            'count' => rand(1, 4)
        ];
    }
}
