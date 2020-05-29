<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Courses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->default('none');
            $table->string('price', 100);
            $table->string('parent_course', 100);
           // $table->string('grade', 100)->default('none');
            $table->string('branch', 100)->default('none');
            $table->string('room', 100);
            $table->string('instructor', 100);
            $table->string('stu_courses', 100)->default('none');
<<<<<<< HEAD
            $table->string('ins_course', 100)->default('none');
            //  defaults



=======
          
            
            
           
            
>>>>>>> 489cf06524a492f2528faaa6e0642e3b258cd174
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
