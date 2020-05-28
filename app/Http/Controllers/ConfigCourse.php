<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Database\Eloquent\Model;
use App\users;


class ConfigCourse extends Controller
{
    public function login()
    {
        return view('courses.student');
    }
    public function loginViwe()
    {
        return view('courses.login');
    }



}
