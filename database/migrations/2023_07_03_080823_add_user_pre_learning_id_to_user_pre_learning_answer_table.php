<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserPreLearningIdToUserPreLearningAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pre_learning_answers', function (Blueprint $table) {
            $table->integer('user_pre_learning_id')->after('pre_learning_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_pre_learning_answer', function (Blueprint $table) {
            //
        });
    }
}
