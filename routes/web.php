<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResponseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'submitRegister']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');
    Route::get('/questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');
});


Route::post('/questions/{id}/favorite', [FavoriteController::class, 'toggle'])
    ->middleware('auth')
    ->name('questions.favorite');

Route::get('/questions/{question}', [QuestionController::class, 'show'])
    ->name('questions.show');
//createResp
Route::post('/responses', [ResponseController::class, 'store'])->name('responses.store');


Route::middleware(['auth','Admin'])->group(function () {
});