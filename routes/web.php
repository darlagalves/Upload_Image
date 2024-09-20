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

Route::get('/edit_pacient', function () {
    return view('pacient.edit_pacient');
})->name('edit_pacient');

Route::get('/create_pacient', function () {
    return view('pacient.create_pacient');
})->name('create_pacient');

Route::get('/pacient', function () {
    return view('pacient.pacient');
})->name('pacient');

Route::get('/list_exam', function () {
    return view('exam.list_exam');
})->name('list_exam');

Route::get('/create_exam', function () {
    return view('exam.create_exam');
})->name('create_exam');

Route::get('/diary', function () {
    return view('diary.diary');
})->name('diary');

Route::get('/edit_diary', function () {
    return view('diary.edit_diary');
})->name('edit_diary');

Route::get('/create_diary', function () {
    return view('diary.create_diary');
})->name('create_diary');
