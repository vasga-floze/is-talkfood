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
            $table->id();
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
                ->references('id')
                ->on('albums')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_privacy');
            $table->foreign('id_privacy')
                ->references('id')
                ->on('privacies')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_stepsRecipe');
            $table->foreign('id_stepsRecipe')
                ->references('id')
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
