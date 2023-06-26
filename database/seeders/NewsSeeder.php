<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => '2023년도 하반기 교육과정 업데이트 안내',
            'content' => '안녕하세요, 디지털스마트교육센터입니다. 디지털스마트교육센터 상반기 교육과정 업데이트가 2023년 5월 29일(월)에 진행됩니다. 자세한 업데이트 사항은 아래 내용을 확인해 주시기 바랍니다.',
            'main_exposure' => 1,
            'exposure' => 0,
            'views' => 1,
            'created_at' => '2023-06-05 01:36:00',
            'updated_at' => '2023-06-05 01:36:00',
        ],
        [
            'title' => '2023년도 하반기 교육과정 업데이트 안내',
            'content' => '안녕하세요, 디지털스마트교육센터입니다. 디지털스마트교육센터 상반기 교육과정 업데이트가 2023년 5월 29일(월)에 진행됩니다. 자세한 업데이트 사항은 아래 내용을 확인해 주시기 바랍니다.',
            'main_exposure' => 0,
            'exposure' => 0,
            'views' => 1,
            'created_at' => '2023-06-05 01:36:00',
            'updated_at' => '2023-06-05 01:36:00',
        ]);
    }
}
