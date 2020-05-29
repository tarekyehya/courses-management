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

<<<<<<< HEAD
=======

>>>>>>> 489cf06524a492f2528faaa6e0642e3b258cd174


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
Route::view('courses', 'courses.page');
Route::post('submit', 'courses@save');
// ************************************end**************************

// Route::get('coureses','courses@courses');

