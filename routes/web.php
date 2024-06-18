<?php

use Illuminate\Support\Facades\Route;

 function getUsers(){
    return  [
        1 => ['name' => 'Tarikul', 'phone' => '01711111111', 'city' => 'Dhaka'],
        2 => ['name' => 'Islam', 'phone' => '01711111111', 'city' => 'Dhaka'],
        3 => ['name' => 'Mubin', 'phone' => '01711111111', 'city' => 'Dhaka'],
        4 => ['name' => 'Mubin', 'phone' => '01711111111', 'city' => 'Dhaka'],
    ];
} 

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', function(){
    // $name = 'Tarikul Islam Mubin';


 $myArray = getUsers();
    
    return view('users', [
        'user' => $myArray, 
        ]);

/*     return view('users', [
        'user' => $name,
        'city'=> 'Dhaka',
        'js' => '<script>alert("this is a js script")</script>'
        
        ]); */


       /*  return view('users')->with('user',$name)->with('city', 'Dhaka')->with('js', '<script>alert("this is a js script")</script>'); */

       /* return view('users')->withUser($name)->withCity("Dhaka")->withJs('<script>alert("this is a js script")</script>'); */

});

Route::get('/user/{id}', function ($id) {
    $users = getUsers();
    abort_if(!isset($users[$id]), 404);
    $user = $users[$id];
    return view('user', ['id' => $user]);
})->name('view.user');
