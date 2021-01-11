<?php

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


//Route::get('page1', 'Page1Controller@index');



Route::get('course', 'CourseController@index')->name('courseGet');

Route::get('courseInsert', 'CourseController@courseInsert')->name('courseInsert');
Route::post('courseInsertPost', 'CourseController@courseInsertPost')->name('courseInsertPost');

Route::get('courseUpdate/{id}', 'CourseController@courseUpdate')->name('courseUpdate');
Route::post('courseUpdatePost/{id}', 'CourseController@courseUpdatePost')->name('courseUpdatePost');

Route::get('courseDelete/{id}', 'CourseController@courseDelete')->name('courseDelete');






