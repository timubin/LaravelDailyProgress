<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('students')->get();
        // $users = DB::table('students')->where('id', 2)->get();
        //$users = DB::table('students')->find(4);
        // return $users;
       /*  dd($users); */
        // dump($users);

        return view("allusers",['data'=>$users]);
    }

    public function singleUser(string $id){
        $users = DB::table('students')->where('id', $id)->get();
        return view('user', ['data'=>$users]);
    }


    public function addUser(){
        $user = DB::table('students')
        ->upsert(
            [
            'name' => 'musfik ',
            'age' => 45,
            'email' => 'mk@yahoobaba',
            'address' => ' Dhaka Bangladesh', 
            'city' => 'Dhaka',
            'phone' => ' 1234567890',
            'password' => ' 1234567890',

            ],
            [
                'email'
            ]
    
    );

        if($user){
           return  "<h1>Data inserted successfully</h1>";
        }else{
           return "<h1>Something went wrong</h1>";
        }
    }



    function updateUser(){
        $user = DB::table('students')
        ->where('id', 1)
        ->update([
            'name' => 'Update Adele McLaughlin II ',
            'email' => 'update@yahoobaba',
            'address' => ' Dhaka Bangladesh',
            'city' => 'Dhaka',
            'phone' => ' 1234567890',
            'password' => ' 1234567890',

        ]);

        if($user){
            return  "<h1>Data Update successfully</h1>";
         }else{
            return "<h1>Something went wrong</h1>";
         }
    }
 


    public function deleteUser(string $id){
        $user= DB::table('students')
        ->where('id', $id)
        ->delete();

        if($user){
            return redirect('/');
         }else{
            return "<h1>Something went wrong</h1>";
         }
    }
}
