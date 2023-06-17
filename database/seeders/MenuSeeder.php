<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'name' => 'MUVE 소개',
            'student' => 1,
            'instructor' => 1
        ]);
        Menu::create([
            'name' => 'MUVE란?',
            'student' => 1,
            'instructor' => 1
        ]);
        Menu::create([
            'name' => '갤러리',
            'student' => 1,
            'instructor' => 1
        ]);
        Menu::create([
            'name' => '교육과정',
            'student' => 1,
            'instructor' => 1
        ]);
        Menu::create([
            'name' => '온라인 사전학습',
            'student' => 1,
            'instructor' => 1
        ]);
        Menu::create([
            'name' => '사전학습',
            'student' => 1,
            'instructor' => 1
        ]);
        Menu::create([
            'name' => '사전학습 평가',
            'student' => 1,
            'instructor' => 1
        ]);
        Menu::create([
            'name' => '본학습',
            'student' => 1,
            'instructor' => 1
        ]);
        Menu::create([
            'name' => '이용안내',
            'student' => 1,
            'instructor' => 1
        ]);
        Menu::create([
            'name' => '다운로드',
            'student' => 1,
            'instructor' => 1
        ]);
    }
}
