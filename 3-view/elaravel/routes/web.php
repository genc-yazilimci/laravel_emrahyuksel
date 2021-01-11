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
    return view('course');
});

//Route::get('/page', function () {
//    $data=[
//        "ad" => "emrah",
//        "soyad" => "yüksel"
//    ];
//    return view('page',compact('data'));
////    return view('page')->with(["ad" => "emrah","soyad" => "yüksel"]);
////    return view('page')->with('ad','emrah')->with('soyad','yüksel');
//
//});

Route::get('page', 'Page1Controller@index');
//Route::get('show', 'Page1Controller@show');

//Route::get('/backend', function () {
//    return view('Backend.default.index');
//});
//
//Route::get('/frontend', function () {
//    return view('Frontend.index');
//});








