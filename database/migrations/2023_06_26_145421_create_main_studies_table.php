<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_studies', function (Blueprint $table) {
            $table->id();
            $table->integer('curriculum_id');
            $table->integer('instructor_id');
            $table->integer('final_id');
            $table->integer('report_id');
            $table->integer('survey_id');
            $table->string('name');
            $table->text('description');
            $table->dateTime('end_date');
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
        Schema::dropIfExists('main_studies');
    }
}
