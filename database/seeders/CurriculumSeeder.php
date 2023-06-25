<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curriculum;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curriculum::create([
            'department_id' => 1,
            'name' => 'Curriculum 1',
            'status' => 1,
        ]);
        Curriculum::create([
            'department_id' => 1,
            'name' => 'Curriculum 2',
            'status' => 1,
        ]);
        Curriculum::create([
            'department_id' => 2,
            'name' => 'Curriculum 1',
            'status' => 1,
        ]);
        Curriculum::create([
            'department_id' => 2,
            'name' => 'Curriculum 2',
            'status' => 1,
        ]);
    }
}
