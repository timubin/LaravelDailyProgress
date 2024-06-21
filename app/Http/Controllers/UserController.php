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

/*     public function singleUser(string $id){
        $users = DB::table('students')->where('id', $id)->get();
        return view('user', ['data'=>$users]);
    } */

    public function singleUser(){
        $users = DB::table('students')
        ->orderBy('name', 'asc')
        ->get();
        return view('user', ['data'=>$users]);
    }
}
