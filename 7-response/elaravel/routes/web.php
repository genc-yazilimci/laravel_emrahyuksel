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

Route::get('/collection', function () {
        return url()->full();
});

Route::get('/page2', function () {
    return redirect(url()->previous());
});


Route::get('course', 'CourseController@index')->name('courseGet');
Route::post('courseInsert', 'CourseController@courseInsert')->name('courseInsert');








