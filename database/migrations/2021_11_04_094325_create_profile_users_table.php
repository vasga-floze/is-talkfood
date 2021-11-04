<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_users', function (Blueprint $table) {
            $table->bigIncrements('id_profile'); //Tipo de columna equivalente a auto-incremento UNSIGNED BIGINT (clave primaria).
            $table->string('firstName', 20);
            $table->string('lastName', 20);
            $table->date('birthDate');
            $table->string('gender', 10) ->nullable();
            $table->string('profilePic', 150) ->nullable();
            $table->string('address', 30)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('marital_status', 12)->nullable();
            $table->string('email', 50);
            $table->unsignedBigInteger('id_user')->unique();
            $table->foreign('id_user')
                ->references('id') ->on('users') ->onDelete('cascade');
            $table->unsignedBigInteger('id_country');
            $table->foreign('id_country')
                ->references('id_country') ->on('countries') ->onDelete('cascade');
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
        Schema::dropIfExists('profile_users');
    }
}
