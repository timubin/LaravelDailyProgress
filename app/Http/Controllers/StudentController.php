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
}
