<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationInstructorCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructorCourses', function (Blueprint $table) {
            $table->id();
            $table->integer('instructor_id');
            $table->string('instructor_name',40)->nullable();
            $table->integer('courseOne_id');
            $table->string('courseOne_name',40)->nullable();
            $table->integer('courseTow_id')->nullable();
            $table->string('courseTow_name',40)->nullable();
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
        Schema::dropIfExists('instructorCourses');
    }
}
