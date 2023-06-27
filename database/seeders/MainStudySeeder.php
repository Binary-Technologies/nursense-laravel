<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MainStudy;
use App\Models\FinalStudy;
use App\Models\FinalStudyQuestion;
use App\Models\Report;
use App\Models\SurveyItem;

class MainStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MainStudy::create([
            'curriculum_id' => 1,
            'instructor_id' => 1,
            'name' => '학습 1',
            'description' => '학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용학습에 관한 간단한 내용',
            'end_date' => '2023-01-01',
            'final_id' => 1,
            'report_id' => 1,
            'survey_id' => 1,
        ]);

        FinalStudy::create([
            'main_study_id' => 1,
            'name' => '최종평가 1',
            'description' => '최종평가에 관한 간단한 내용',
        ]);
    }
}
