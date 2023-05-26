<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('news')->insert([
            'title' => '2023년도 하반기 교육과정 업데이트 안내',
            'content' => '안녕하세요, 디지털스마트교육센터입니다. 디지털스마트교육센터 상반기 교육과정 업데이트가 2023년 5월 29일(월)에 진행됩니다. 자세한 업데이트 사항은 아래 내용을 확인해 주시기 바랍니다.',
            'main_exposure' => 1,
            'exposure' => 0,
            'views' => 1,
        ]);

        DB::table('news')->insert([
            'title' => '동영상 재생 안 될 경우 조치 사항',
            'content' => '동영상 재생 안 될 경우 조치 사항',
            'main_exposure' => 0,
            'exposure' => 1,
            'views' => 0,
        ]);

        DB::table('news')->insert([
            'title' => '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내',
            'content' => '디지털스마트교육센터 모바일 학습을 위한 설정 매뉴얼 안내',
            'main_exposure' => 0,
            'exposure' => 1,
            'views' => 0,
        ]);

        DB::table('notices')->insert([
            'title' => '디지털스마트교육센터 2023년도 상반기 우수사업 선정',
            'content' => '안녕하세요 디지털스마트교육센터입니다. 디지털스마트교육센터가 2023년도 우수사업에 선정되었습니다. 디지털스마트교육센터는 보건간호교육의 핵심역량을 강화하고 새로운 패러다임을 확보하고자 하는 디지털 교육 플랫폼입니다.',
            'main_exposure' => 1,
            'exposure' => 0,
            'views' => 1,
        ]);

        DB::table('notices')->insert([
            'title' => '2023년 디지털스마트교육센터 홍보 영상',
            'content' => '2023년 디지털스마트교육센터 홍보 영상',
            'main_exposure' => 0,
            'exposure' => 1,
            'views' => 0,
        ]);

        DB::table('notices')->insert([
            'title' => '고령층 스마트폰 활용 교육 우수사례 소개',
            'content' => '고령층 스마트폰 활용 교육 우수사례 소개',
            'main_exposure' => 0,
            'exposure' => 1,
            'views' => 0,
        ]);

        DB::table('users')->insert([
            
                  "inst_id"=> "inst0001",
                  "std_id"=> null,
                  "name"=> "instructor",
                  "role"=>"instructor",
                  "email"=> "instructor@gmail.com",
                  "email_verified_at"=> null,
                  "pno"=> "0718640050",
                  "uni_id"=> 1,
                  "major_id"=> 1,
                  "active_status"=> null,
                  "dob"=> null,
                  "occupation"=> "Software Engineer",
                  "gender"=> "male",
                  "grade"=> 1,
                  "resident_reg"=> 0001,
                  "password"=> Hash::make(12345678),
               
        ]);
        DB::table('users')->insert([
            
            "inst_id"=> null,
            "std_id"=>"std0001",
            "name"=> "student",
            "role"=>"student",
            "email"=> "student@gmail.com",
            "email_verified_at"=> null,
            "pno"=> "0741443733",
            "uni_id"=> 1,
            "major_id"=> 1,
            "active_status"=> null,
            "dob"=> null,
            "occupation"=> "Software Engineer",
            "gender"=> "male",
            "grade"=> 1,
            "resident_reg"=> 0001,
            "password"=> Hash::make(12345678),
         
  ]);
    }
}
