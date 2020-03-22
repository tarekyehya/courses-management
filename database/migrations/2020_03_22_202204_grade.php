<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Grade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade', function (Blueprint $table) {
            $table->integer('student_marks',40);
            $table->string('course_1', 100);
            $table->string('course_2', 100);
            $table->string('course_3', 100);
            $table->string('course_4', 100);
            $table->string('course_5', 100);
            $table->string('course_6', 100);
            $table->string('degree_1', 40);
            $table->string('degree_2', 40);
            $table->string('degree_3', 40);
            $table->string('degree_4', 40);
            $table->string('degree_5', 40);
            $table->string('degree_6', 40);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade');
    }
}
