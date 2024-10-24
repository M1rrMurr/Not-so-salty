<?php

use App\Models\DietType;
use App\Models\Recipe;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('diet_type_recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DietType::class);
            $table->foreignIdFor(Recipe::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diet_type_recipes');
    }
};
