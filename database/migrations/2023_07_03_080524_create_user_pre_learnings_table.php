<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPreLearningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_pre_learnings', function (Blueprint $table) {
            $table->id();
            $table->integer('pre_learning_id');
            $table->integer('user_id');
            $table->integer('total_points')->default(0);
            $table->integer('correct_count')->default(0);
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
        Schema::dropIfExists('user_pre_learnings');
    }
}
