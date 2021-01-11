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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('course', function () {
    return view('course');
})->middleware('auth');

Route::get('/', function () {
    return "Giriş Yap";
})->name('logging');

Route::get('mlogin', 'mloginController@index')->name('mlogin');
Route::get('mlogout', 'mloginController@mlogout')->name('mlogout');

Route::post('mloginCheck', 'mloginController@authenticate')->name('mloginCheck');

//Route::get('checkage','AgeController@index');

Route::get('checkage', function () {

    if (Gate::allows('checkage', Auth::user())) {
        return view('sitehome');
    } else {
        echo "Giriş yaptınız ama bu sayfaya erişim yetkiniz yok.";
    }
});

Route::post('ageCheckPost', 'AgeController@ageCheck')
    ->name('ageCheckPost')
    ->middleware('CheckAge');
