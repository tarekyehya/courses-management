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









//  Route::get('/ddd', 'ConfigCourse@loginViwe');

Route::get('', function () {
    return view('welcome');
});
//********************************************************courses page***********************
Route::view('courses', 'courses.page');
Route::post('submit', 'courses@save');
// ************************************end**************************

Route::view('student', 'courses.student');



