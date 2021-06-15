<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/aboutme', function () {
    return view('aboutme');
})->name('aboutme');

Route::middleware(['auth:sanctum', 'verified'])->get('/favorites', function () {
    return view('favorites');
})->name('favorites');

Route::middleware(['auth:sanctum', 'verified'])->get('/recipebook', function () {
    return view('recipebook');
})->name('recipebook');

Route::middleware(['auth:sanctum', 'verified'])->get('/form', function () {
    return view('form');
})->name('form');

Route::get('steppers', 'App\Http\Controllers\FormController@index')->name('steppers.index');
Route::get('steppers/create-step-one', 'App\Http\Controllers\FormController@createStepOne')->name('steppers.create.step.one');
Route::post('steppers/create-step-one', 'App\Http\Controllers\FormController@postCreateStepOne')->name('steppers.create.step.one.post');
  
Route::get('steppers/create-step-two', 'App\Http\Controllers\FormController@createStepTwo')->name('steppers.create.step.two');
Route::post('steppers/create-step-two', 'App\Http\Controllers\HomeController@postCreateStepTwo')->name('steppers.create.step.two.post');
  
Route::get('steppers/create-step-three', 'App\Http\Controllers\FormController@createStepThree')->name('steppers.create.step.three');
Route::post('steppers/create-step-three', 'App\Http\Controllers\FormControllerr@postCreateStepThree')->name('steppers.create.step.three.post');