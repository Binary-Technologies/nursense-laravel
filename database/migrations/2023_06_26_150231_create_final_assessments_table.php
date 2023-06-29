<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinalAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final_studies', function (Blueprint $table) {
            $table->id();
            $table->integer('instructor_id');
            $table->string('name');
            $table->text('description');
            $table->dateTime('register_date');
            $table->dateTime('deadline_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('final_assessments');
    }
}
