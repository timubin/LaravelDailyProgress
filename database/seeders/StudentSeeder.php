<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


for($i=1; $i<=10; $i++){
    student::create([
        'name' => fake()->name(),
        'email' => fake()->unique()->email()
    ]);
}





/*         $json = File::get(path:'database/json/students.json');
        $students =collect( json_decode($json));

        $students->each(function($student){
            student::create([
                'name' => $student->name,
                'email' => $student->email
            ]);
        }); */



/*         $students = collect(
            [
                [
                    'name' => 'John Doe',
                    'email' => 'X2G5Ic@example.com',
                ],
                [
                    'name' => "mary",
                    'email' => "LsTqW@example.com",
                ],
                [
                    'name' => "jack",
                    'email' => "kWbQj@example.com",
                ]
                ]
            );

            $students->each(function($student){
                student::insert($student);
            }); */

    /*     student::create([
            'name' => 'John Doe',
            'email' => 'XG5Ic@example.com',
        ]); */
    }
}
