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

Route::get('/', function () {
    return view('welcome');
});

Route::get('page', 'Page1Controller@index');
Route::get('show', 'Page1Controller@show');


Route::get('pageFrontend', 'Frontend\PageController@index');

Route::group(['namespace' => 'Backend'], function () {

    Route::get('page2/{ad?}/{soyad?}', 'Page2Controller@index');

    Route::get('page3', 'Page3Controller@index')->name('backend.page3');
    Route::get('page4', 'Page4Controller@index');
    Route::get('single','SingleController');
});









