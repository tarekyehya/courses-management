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



<<<<<<< HEAD
=======

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/{user}', 'HomeController@edit')->name('users.edit');
Route::delete('users/{user}', 'HomeController@destroy')->name('users.destroy');
Route::put('users/{user}', 'HomeController@update')->name('users.update');
>>>>>>> 57f7c164cb409a5fd263eb4a1290c61ce2a7da9a
