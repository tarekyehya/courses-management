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
<<<<<<< HEAD
=======
            $table->string('name', 100);
>>>>>>> 57f7c164cb409a5fd263eb4a1290c61ce2a7da9a
            $table->string('price', 100);
            $table->string('parent_course', 100);
            $table->string('room', 100);
            $table->string('instructor', 100);
          

            
            
        
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
