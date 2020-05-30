<?php

use Illuminate\Support\Facades\Route;
use app\Courses;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/courses', function () {

    return view('courses.page');
});

Route::get(' ', 'ConfigCourse@loginViwe');

Route::get('/login', 'ConfigCourse@login');
Route::view('courses', 'courses.page');
Route::post('submit', 'courses@save');
// Route::get('/', 'ConfigCourse@loginViwe');

Route::get('/login', 'ConfigCourse@login');
//   home page
//Route::get('', function () {
  //  return view('welcome');
//});
//********************************************************courses page***********************
Route::view('/login/courses', 'courses.page');
Route::post('submit', 'courses@save');
// ************************************end**************************

// Route::get('coureses','courses@courses');

