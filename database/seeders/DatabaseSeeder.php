<?php

namespace Database\Seeders;

use App\Models\student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // student::factory()->count(20)->create();
        student::factory(10)->create();



      /*   $this->call([
            StudentSeeder::class,
           
        ]); */
    }
}
