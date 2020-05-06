<?php

use Illuminate\Support\Facades\Route;
use app\Courses;
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

Route::get('/', function () {
    return view('welcome');
});
//   handle routing  in course pages 
Route::get('course', function () {
    $couses= DB::tabel('courses')->get();

    return view('courses.course',compact('courses'));
});
//    passing data  to data-base
Route::post('course', function (Request $request ) {
    $Courses = new Courses ;
    $Courses->insttructor=$request->instructor;
    $Courses->grade=$request->grade;
    $Courses->price=$request->price;
    $Courses->parent_course=$request->parent_course;
    $Courses->room=$request->room;
    $Courses->save();
    return back();    //  we  will  see if wee  neded it 
    return view('courses.course');
});