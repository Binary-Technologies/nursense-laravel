<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreLearningAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_learning_answers', function (Blueprint $table) {
            $table->id();
            $table->integer('pre_learning_id');
            $table->integer('pre_learning_question_id');
            $table->integer('user_id');
            $table->text('given_answer');
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
        Schema::dropIfExists('pre_learning_answers');
    }
}
