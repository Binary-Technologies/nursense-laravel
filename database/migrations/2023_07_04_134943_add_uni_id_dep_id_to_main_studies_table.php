<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniIdDepIdToMainStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('main_studies', function (Blueprint $table) {
            $table->integer('university_id')->after('id')->nullable();
            $table->integer('department_id')->after('university_id')->nullable();
            $table->integer('semester_id')->after('department_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('main_studies', function (Blueprint $table) {
            //
        });
    }
}
