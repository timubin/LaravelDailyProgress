<?php

namespace Database\Seeders;

use App\Models\citie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        citie::factory()->count(10)->create();
    }
}
