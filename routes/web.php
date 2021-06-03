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