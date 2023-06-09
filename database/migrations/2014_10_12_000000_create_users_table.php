<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('inst_id')->unique()->nullable();
            $table->string('std_id')->unique()->nullable();
            $table->enum('role', ['instructor', 'student']);
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('pno')->unique();
            $table->integer('uni_id')->nullable();
            $table->integer('major_id')->nullable();
            $table->boolean('active_status')->nullable();
            $table->date('dob')->nullable();
            $table->string('occupation')->nullable();
            $table->string('gender')->nullable();
            $table->boolean('completion_status')->nullable();
            $table->string('grade')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('resident_reg')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
