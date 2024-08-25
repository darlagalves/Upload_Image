<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home'); // Define o nome da rota como "home"

Route::post('/images', 'App\Http\Controllers\ImageController@store')->name('images.store');