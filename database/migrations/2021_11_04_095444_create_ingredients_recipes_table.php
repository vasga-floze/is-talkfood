<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_recipes', function (Blueprint $table) {
            $table->id('id_ingredientsRecipe');
            $table->string('ingredientName', 25);
            $table->string('presentation', 30)->nullable();
            $table->string('quantity', 30);
            $table->unsignedBigInteger('id_recipe');
            $table->foreign('id_recipe')
                ->references('id_recipe')
                ->on('recipes')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients_recipes');
    }
}
