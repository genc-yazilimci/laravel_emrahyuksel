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
})->name('welcome');

Route::get('newpage/{ad}/{soyad}', function ($ads,$soyads) {
    return $ads." ".$soyads;
//})->where('ad','[0-9]+');
})->where(['ad' => '[a-z]+','soyad' => '[azA-z]+'])->name('newPageParam');

Route::get('post', function () {
    return view('newpage');
})->name('homepage');
