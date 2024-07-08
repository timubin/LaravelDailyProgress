<?php

use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[StudentController::class , 'showStudents']);

Route::get('uniondata',[StudentController::class , 'uniondata']);
Route::get('chunk',[StudentController::class , 'chunkdata']);

