<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietType extends Model
{
    /** @use HasFactory<\Database\Factories\DietTypeFactory> */
    use HasFactory;

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'diet_type_recipes');
    }
}
