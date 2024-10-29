<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        return inertia('Home', ['recipes' => Recipe::with('dietTypes')->paginate(10)]);
    }

    public function show(Recipe $recipe)
    {
        $recipe->load('dietTypes', 'ingredients');

        return inertia('Recipe', ['recipe' => $recipe]);
    }
}
