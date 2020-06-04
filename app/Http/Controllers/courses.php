<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;

class courses extends Controller
{
    function save(Request $req)
    {
          $Course = new course;
          $Course->instructor=$req->instructor;
          $Course->price=$req->price;
          $Course->parent_course=$req->parent_course;
          $Course->room=$req->room;
<<<<<<< HEAD
=======
          $Course->name=$req->name;
>>>>>>> 57f7c164cb409a5fd263eb4a1290c61ce2a7da9a
    
         echo  $Course->save();

    }
}
