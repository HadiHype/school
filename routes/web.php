<?php

use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

// Homework routes
Route::get('homework', [HomeworkController::class, 'index'])->name('homework');
Route::get('homework/{homework:title}', [HomeworkController::class, 'show']);
Route::patch('homework/{homework:id}', [HomeworkController::class, 'update']);

// Registration Routes
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

// Login Routes
Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth:students');
