<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RecipeController::class, 'index']);
Route::get('/recipe/{recipe}', [RecipeController::class, 'show']);
