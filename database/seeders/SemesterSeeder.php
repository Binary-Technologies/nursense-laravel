<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Semester;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::create([
            'semester' => ' Grade 1',
        ]);
        Semester::create([
            'semester' => ' Grade 2',
        ]);
        Semester::create([
            'semester' => ' Grade 3',
        ]);
        Semester::create([
            'semester' => ' Grade 4',
        ]);
    }
}
