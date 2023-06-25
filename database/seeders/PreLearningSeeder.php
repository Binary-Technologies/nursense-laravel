<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PreLearning;
use App\Models\PreLearningQuestion;

class PreLearningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PreLearning::create([
            'curriculum_id' => 1,
            'name' => '사전 학습 2 평가 등록 제목',
            'description' => '따뜻한 풀밭에 커다란 살 노래하며 남는 위하여서, 뼈 말이다. 위하여, 그들의 가지에 이 남는 가슴에 굳세게 쓸쓸하랴? 같이, 대중을 낙원을 얼음이 공자는 심장의 철환하였는가? 황금시대의 청춘이 우리는 철환하였는가? 인생에 두기 장식하는 그와 구할 곳이 창공에 듣는다. 행복스럽고 별과 찾아다녀도, 동력은 생생하며, 얼마나 것이다. 전인 노래하며 있는 있으랴? 청춘 간에 가장 구하지 돋고, 같은 꽃이 그들을 칼이다. 행복스럽고 같으며, 보내는 피고 이상의 이상 새 쓸쓸하랴?',
            'register_date' => '2023.03.16 18:00',
            'deadline_date' => '2023.01.23 18:00',
            'user_id' => 1,
            'status' => 1,
        ]);

        PreLearningQuestion::create([
            'pre_learning_id' => 1,
            'question' => '다음 중 당뇨 증상과 올바르지 않은 것을 고르시오',
            'option_1' => '텍스트',
            'option_2' => '텍스트텍스트',
            'option_3' => '텍스트텍스트텍스트',
            'option_4' => '텍스트텍스트텍스트텍스트',
            'option_5' => '텍스트텍스트텍스트텍스트텍스트',
            'answer' => '텍스트',
            'points' => 10,
        ]);
        PreLearningQuestion::create([
            'pre_learning_id' => 1,
            'question' => '다음 중 당뇨 증상과 올바르지 않은 것을 고르시오',
            'option_1' => '텍스트',
            'option_2' => '텍스트텍스트',
            'option_3' => '텍스트텍스트텍스트',
            'option_4' => '텍스트텍스트텍스트텍스트',
            'option_5' => '텍스트텍스트텍스트텍스트텍스트',
            'answer' => '텍스트',
            'points' => 10,
        ]);
        PreLearningQuestion::create([
            'pre_learning_id' => 1,
            'question' => '다음 중 당뇨 증상과 올바르지 않은 것을 고르시오',
            'option_1' => '텍스트',
            'option_2' => '텍스트텍스트',
            'option_3' => '텍스트텍스트텍스트',
            'option_4' => '텍스트텍스트텍스트텍스트',
            'option_5' => '텍스트텍스트텍스트텍스트텍스트',
            'answer' => '텍스트',
            'points' => 10,
        ]);
        PreLearningQuestion::create([
            'pre_learning_id' => 1,
            'question' => '다음 중 당뇨 증상과 올바르지 않은 것을 고르시오',
            'option_1' => '텍스트',
            'option_2' => '텍스트텍스트',
            'option_3' => '텍스트텍스트텍스트',
            'option_4' => '텍스트텍스트텍스트텍스트',
            'option_5' => '텍스트텍스트텍스트텍스트텍스트',
            'answer' => '텍스트',
            'points' => 10,
        ]);
        PreLearningQuestion::create([
            'pre_learning_id' => 1,
            'question' => '다음 중 당뇨 증상과 올바르지 않은 것을 고르시오',
            'option_1' => '텍스트',
            'option_2' => '텍스트텍스트',
            'option_3' => '텍스트텍스트텍스트',
            'option_4' => '텍스트텍스트텍스트텍스트',
            'option_5' => '텍스트텍스트텍스트텍스트텍스트',
            'answer' => '텍스트',
            'points' => 10,
        ]);
    }
}
