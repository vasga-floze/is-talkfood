<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//rutas para API
//listar
Route::get('recipes', 'App\Http\Controllers\RecipeController@index');
//listar por id
Route::get('recipe/{id}', 'App\Http\Controllers\RecipeController@show');
//guardar
Route::post('recipe', 'App\Http\Controllers\RecipeController@store');
//update
Route::put('recipe', 'App\Http\Controllers\RecipeController@store');
//eliminar
Route::delete('recipe/{id}', 'App\Http\Controllers\RecipeController@destroy');
