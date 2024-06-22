<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::controller(UserController::class)->group(function(){

Route::get('/','showUsers');

Route::get('/user/{id}','singleUser')->name('view.user');
// Route::get('/user',[UserController::class, 'singleUser'])->name('view.user');

Route::post('/add','addUser')->name('addUser');
Route::post('/update/{id}', 'updateUser')->name('update.user');
Route::get('/updatepage/{id}', 'updatePage')->name('update.page');
Route::get('/delete/{id}', 'deleteUser')->name('delete.user');


});




Route::view('newuser', '/adduser');
