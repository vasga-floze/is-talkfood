<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id('id_recipe');
            $table->string('nameRecipe', 50);
            $table->string('time', 30)->nullable();
            $table->string('description', 250);
            $table->string('recipePhotography', 150);
            $table->integer('levelRate')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_album');
            $table->foreign('id_album')
                ->references('id_album')
                ->on('albums')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')
                ->references('id_category')
                ->on('categories')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_privacy');
            $table->foreign('id_privacy')
                ->references('id_privacy')
                ->on('privacies')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_stepsRecipe');
            $table->foreign('id_stepsRecipe')
                ->references('id_stepsRecipe')
                ->on('steps_recipes')
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
        Schema::dropIfExists('recipes');
    }
}
