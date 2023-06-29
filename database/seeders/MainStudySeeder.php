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
            'instructor_id' => 1,
            'name' => '최종평가 1',
            'description' => '따뜻한 풀밭에 커다란 살 노래하며 남는 위하여서, 뼈 말이다. 위하여, 그들의 가지에 이 남는 가슴에 굳세게 쓸쓸하랴? 같이, 대중을 낙원을 얼음이 공자는 심장의 철환하였는가? 황금시대의 청춘이 우리는 철환하였는가? 인생에 두기 장식하는 그와 구할 곳이 창공에 듣는다. 행복스럽고 별과 찾아다녀도, 동력은 생생하며, 얼마나 것이다. 전인 노래하며 있는 있으랴? 청춘 간에 가장 구하지 돋고, 같은 꽃이 그들을 칼이다. 행복스럽고 같으며, 보내는 피고 이상의 이상 새 쓸쓸하랴?',
            'register_date' => '2023-01-01',
            'deadline_date' => '2023-01-01',
        ]);

        FinalStudyQuestion::create([
            'final_id' => 1,
            'question' => '다음 중 당뇨 증상과 올바르지 않은 것을 고르시오',
            'option_1' => '텍스트',
            'option_2' => '텍스트텍스트',
            'option_3' => '텍스트텍스트텍스트',
            'option_4' => '텍스트텍스트텍스트텍스트',
            'option_5' => '텍스트텍스트텍스트텍스트텍스트',
            'answer' => '텍스트',
            'points' => 10,
        ]);
        FinalStudyQuestion::create([
            'final_id' => 1,
            'question' => '다음 중 당뇨 증상과 올바르지 않은 것을 고르시오',
            'option_1' => '텍스트',
            'option_2' => '텍스트텍스트',
            'option_3' => '텍스트텍스트텍스트',
            'option_4' => '텍스트텍스트텍스트텍스트',
            'option_5' => '텍스트텍스트텍스트텍스트텍스트',
            'answer' => '텍스트',
            'points' => 10,
        ]);
        FinalStudyQuestion::create([
            'final_id' => 1,
            'question' => '다음 중 당뇨 증상과 올바르지 않은 것을 고르시오',
            'option_1' => '텍스트',
            'option_2' => '텍스트텍스트',
            'option_3' => '텍스트텍스트텍스트',
            'option_4' => '텍스트텍스트텍스트텍스트',
            'option_5' => '텍스트텍스트텍스트텍스트텍스트',
            'answer' => '텍스트',
            'points' => 10,
        ]);
        FinalStudyQuestion::create([
            'final_id' => 1,
            'question' => '다음 중 당뇨 증상과 올바르지 않은 것을 고르시오',
            'option_1' => '텍스트',
            'option_2' => '텍스트텍스트',
            'option_3' => '텍스트텍스트텍스트',
            'option_4' => '텍스트텍스트텍스트텍스트',
            'option_5' => '텍스트텍스트텍스트텍스트텍스트',
            'answer' => '텍스트',
            'points' => 10,
        ]);
        FinalStudyQuestion::create([
            'final_id' => 1,
            'question' => '다음 중 당뇨 증상과 올바르지 않은 것을 고르시오',
            'option_1' => '텍스트',
            'option_2' => '텍스트텍스트',
            'option_3' => '텍스트텍스트텍스트',
            'option_4' => '텍스트텍스트텍스트텍스트',
            'option_5' => '텍스트텍스트텍스트텍스트텍스트',
            'answer' => '텍스트',
            'points' => 10,
        ]);

        Report::create([
            'title' => '가지에 만물은 수 앞이 맺어, 들어 그리하였는가? 우는 인생을 굳세게 황금시대다. 피가 인생에 그들은 말이다.',
            'content' => '따뜻한 풀밭에 커다란 살 노래하며 남는 위하여서, 뼈 말이다. 위하여, 그들의 가지에 이 남는 가슴에 굳세게 쓸쓸하랴? 같이, 대중을 낙원을 얼음이 공자는 심장의 철환하였는가? 황금시대의 청춘이 우리는 철환하였는가? 인생에 두기 장식하는 그와 구할 곳이 창공에 듣는다. 행복스럽고 별과 찾아다녀도, 동력은 생생하며, 얼마나 것이다. 전인 노래하며 있는 있으랴? 청춘 간에 가장 구하지 돋고, 같은 꽃이 그들을 칼이다. 행복스럽고 같으며, 보내는 피고 이상의 이상 새 쓸쓸하랴? 그들은 위하여 불어 무엇을 찾아 뭇 일월과 이상은 아니더면, 봄바람이다. 실로 무엇을 얼마나 자신과 못하다 말이다. 지혜는 위하여, 희망의 보는 칼이다. 꽃이 가진 되는 살았으며, 설레는 하는 노년에게서 만물은 이것이다. 피가 곳으로 밝은 스며들어 붙잡아 천지는 이성은 피는 뜨고, 약동하다. 청춘을 그것을 않는 없는 들어 희망의 위하여 용기가 이것이다. 창공에 보는 피고, 싶이 주는 주며, 커다란 속에 듣는다. 속에서 원질이 품었기 사막이다. 살 그들은 수 못할 많이 만물은 말이다. 것은 뼈 이상을 황금시대를 고동을 산야에 있으랴? 일월과 그들은 바로 힘있다. 그들의 얼마나 같은 끓는 같지 두손을 품으며, 사막이다. 따뜻한 충분히 목숨을 피가 위하여, 아름다우냐? 얼음과 따뜻한 풀밭에 가지에 열락의 트고, 가진 뜨거운지라, 것이다. 곳으로 그들은 풀이 가장 몸이 끓는 아니더면, 교향악이다. 천고에 붙잡아 할지라도 피에 것이다. 있음으로써 찬미를 사랑의 인도하겠다는 날카로우나 기쁘며, 황금시대다. 이상, 할지니, 얼마나 안고, 쓸쓸하랴? 예가 작고 같이, 방지하는 어디 것이다. 동산에는 피부가 속에 얼마나 위하여 대중을 사랑의 있으랴? 무한한 못하다 물방아 자신과 부패뿐이다.',
            'publish_date' => '2020-01-01',
            'deadline_date' => '2020-01-01',
            'file_path' => 'public/files/reports/1/1/test.pdf',
        ]);

        SurveyItem::create([
            'title' => 'Survey 1',
            'questions' => json_encode(['텍1', '텍2', '텍3']),
        ]);
    }
}
