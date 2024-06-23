<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        // $users = DB::table('students')->simplePaginate(10);
        // $users = DB::table('students')->paginate(10);
        // $users = DB::table('students')->orderBy('name')->paginate(10);
        $users = DB::table('students')->orderBy('id')->cursorPaginate(10);
 
        return view("allusers",['data'=>$users]);
    }

    public function singleUser(string $id){
        $users = DB::table('students')->where('id', $id)->get();
        return view('user', ['data'=>$users]);
    }


    public function addUser(Request $req){

        $user = DB::table('students')
        ->insert(
            [
            'name' => $req->name,
            'age' => $req->age,
            'email' => $req->email,
            'address' => $req->address, 
            'city' => $req->city,
            'phone' => $req->phone,
            'password' => $req->password,

            ],
            [
                'email'
            ]
    
    );

        if($user){
           return  redirect('/');
        }else{
           return "<h1>Something went wrong</h1>";
        }
    }

 
    public function updatePage(string $id){
        // $user =DB::table('students')->where('id', $id)->get();
        $user =DB::table('students')->find($id);
        // return $user;
        return view ('update', ['data'=>$user]);
    }

    function updateUser(Request $req, $id){
        $user = DB::table('students')
        ->where('id', $id)
        ->update([
            'name' => $req->name,
            'email' => $req->email,
            'address' => $req->address,
            'city' => $req->city,
            'phone' => $req->phone,
            'password' => $req->password,

        ]);

        if($user){
            return  redirect('/');
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
