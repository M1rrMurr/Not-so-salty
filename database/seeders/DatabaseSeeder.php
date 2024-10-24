<?php

namespace Database\Seeders;

use App\Models\DietType;
use App\Models\DietTypeRecipe;
use App\Models\Ingredient;
use App\Models\IngredientRecipe;
use App\Models\Recipe;

use App\Models\User;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $types = ['vegan', 'vegetarian', 'non-vegetarian'];
        $recipeNumber = 20;

        Ingredient::factory(10)->create();
        Recipe::factory($recipeNumber)->create();
        IngredientRecipe::factory(100)->create();
        foreach ($types as $type) {
            DietType::factory()->create(['type' => $type]);
        }
        foreach (range(1, $recipeNumber) as $n) {
            DietTypeRecipe::factory()->create(['recipe_id' => $n]);
        }


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
