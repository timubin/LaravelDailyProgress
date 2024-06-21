<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[UserController::class, 'showUsers']);

// Route::get('/user/{id}',[UserController::class, 'singleUser'])->name('view.user');
Route::get('/user',[UserController::class, 'singleUser'])->name('view.user');

