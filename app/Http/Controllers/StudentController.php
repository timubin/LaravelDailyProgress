<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
 /*    public function showStudents() {
        $students=DB::table('students')->get();
        $cities=DB::table('cities')->get();
    
        return view('home', compact('students' , 'cities'));
    }        
     */


     public function showStudents() {
        $students = DB::table('students')
                    ->join('cities', 'students.city', '=', 'cities.id')
                    /* ->select(DB::raw('count(*) as student_count'), 'city')
                    ->groupBy('city')
                    ->orderBy('student_count', 'asc')
             */
                    ->get();
    
                    // return $students;
            return view('home', compact('students'));
    }

    public function uniondata(){
       $lecturers = DB::table('lecturers')->select('name' , 'email' , 'city_name')->join('cities', 'lecturers.city', '=', 'cities.id');

       $students = DB::table('students')->select('name' , 'email', 'city_name')
        ->union($lecturers)->join('cities', 'students.city', '=', 'cities.id')
        /* ->toSql() */
        ->get();

        return $students;
    }

public function chunkdata(){
    $students = DB::table('students')->orderBy('id')
    ->chunk(3, function($students){
        echo "<div style='border: 1px solid black; margin-bottom: 15px;'>";
        foreach($students as $student){
            echo $student->name . "<br>";
        };
        echo "</div>";
    });
}

}
