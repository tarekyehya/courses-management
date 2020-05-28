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


Route::get('/courses', function () {

    return view('courses.page');
});

Route::get('/', 'ConfigCourse@loginViwe');

Route::get('/login', 'ConfigCourse@login');
=======
Route::get('', function () {
    return view('welcome');
});
Route::view('courses', 'courses.page');
Route::post('submit', 'courses@save');
<<<<<<< HEAD
// Route::get('coureses','courses@courses');
=======
>>>>>>> 2767caa5207fe78bbd29f9cf8a7270dfe514854e
>>>>>>> 86e9f5f9171f0995d1a06a69487ac94a5e1242d0
