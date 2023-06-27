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
            $table->integer('student_id');
            $table->dateTime('final_date');
            $table->integer('final_score');
            $table->tinyInteger('report_status');
            $table->dateTime('report_submit_date');
            $table->string('report_file');
            $table->timestamps();
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
