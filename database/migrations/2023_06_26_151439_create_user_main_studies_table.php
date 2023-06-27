<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMainStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_main_studies', function (Blueprint $table) {
            $table->id();
            $table->integer('main_study_id');
            $table->integer('student_id');
            $table->integer('user_final_id')->nullable();
            $table->integer('user_report_id')->nullable();
            $table->integer('user_survey_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_main_studies');
    }
}
