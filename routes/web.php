<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PacientController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DiagnosesController;
use App\Http\Controllers\CommentsController;

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::middleware('auth')->group(function () {
    // Rotas que exigem autenticação
    /*Route::get('/doctor_dashboard', function () {
        return view('doctor_dashboard');
    })->name('doctor_dashboard');*/

    Route::get('/doctor_dashboard', [PacientController::class, 'dashboard'])->name('doctor_dashboard');

    Route::get('/doctor_dashboard', [PacientController::class, 'index'])->name('doctor_dashboard');


    
    /*Route::get('/edit_pacient', function () {
        return view('pacient.edit_pacient');
    })->name('edit_pacient');*/

    
    Route::put('/pacient/{id}', [PacientController::class, 'update'])->name('pacient.update');

    Route::get('/pacient/{id}/edit', [PacientController::class, 'edit'])->name('pacient.edit_pacient');
    Route::delete('/pacient/{id}', [PacientController::class, 'destroy'])->name('pacient.destroy');

    
    Route::get('/create_pacient', function () {
        return view('pacient.create_pacient');
    })->name('create_pacient');

    Route::post('/create_pacient', [PacientController::class, 'store'])->name('create_pacient');

    Route::get('/user-info', function () {
        if (Auth::check()) {
            $user = Auth::user();
            return response()->json(['user_id' => $user->id]); 
        } else {
            return response()->json(['user_id' => null]); 
        }
    });
    
    Route::get('/pacient', function () {
        return view('pacient.pacient');
    })->name('pacient');

    Route::get('/pacient/{id}', [PacientController::class, 'show'])->name('pacient.pacient');

    
    
    Route::get('/comentario/create/{pacient_id}', [CommentsController::class, 'create'])->name('comment.create');
    Route::post('/comentario/store', [CommentsController::class, 'store'])->name('comment.store');
    Route::get('/comments/{pacient_id}', [CommentsController::class, 'index'])->name('comments.diary');
    Route::delete('/comentario/{id}', [CommentsController::class, 'destroy'])->name('comment.destroy');

    Route::get('/diagnostico/create/{pacient_id}', [DiagnosesController::class, 'create'])->name('diagnosis.create');
    Route::post('/diagnostico/store', [DiagnosesController::class, 'store'])->name('diagnostico.store');

    Route::get('/diagnosis/{pacient_id}/edit', [DiagnosesController::class, 'edit'])->name('diagnosis.edit_diagnosis');
    Route::put('/diagnosis/{pacient_id}', [DiagnosesController::class, 'update'])->name('diagnosis.update');

    Route::get('/exame/{pacient_id}', [ImageController::class, 'list'])->name('exam.list');

    Route::get('/exame/criar/{pacient_id}', [ImageController::class, 'create'])->name('exam.create');
    Route::post('/exame/store', [ImageController::class, 'store'])->name('exam.store');
    
    
    /*Route::get('/create_exam', function () {
        return view('exam.create_exam');
    })->name('create_exam');

    Route::post('/exam/images/store', [ImageController::class, 'store'])->name('images.store');*/
    
    
    Route::get('/edit_diary', function () {
        return view('diary.edit_diary');
    })->name('edit_diary');
    
});

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');


Route::get('/doctor_register', function () {
    return view('doctor_register');
})->name('doctor_register');

Route::post('/doctor_register', [UserController::class, 'store'])->name('doctor_register');
