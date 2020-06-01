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
          $Course->name=$req->name;
    
         echo  $Course->save();

    }
}
