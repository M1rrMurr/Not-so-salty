<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /** @use HasFactory<\Database\Factories\RecipeFactory> */
    use HasFactory;

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredient_recipes')->withPivot('measurement', 'count');
    }
    public function dietTypes()
    {
        return $this->belongsToMany(DietType::class, 'diet_type_recipes');
    }
}
