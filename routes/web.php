<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/images', 'App\Http\Controllers\ImageController@store')->name('images.store');

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/doctor_register', function () {
    return view('doctor_register');
})->name('doctor_register');

Route::get('/doctor_dashboard', function () {
    return view('doctor_dashboard');
})->name('doctor_dashboard');
