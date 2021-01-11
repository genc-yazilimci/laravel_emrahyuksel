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

//Route::get('/collection', function () {
//    $collection=collect([1,2,3,4]);
//    return $collection->all();
//});

//Route::get('/collection', function () {
//    $collection=collect([40,50,70]);
//    return $collection->avg();
//});

//Route::get('/collection', function () {
//    $collection=collect([40,50,70]);
//    return $collection->count();
//});

//Route::get('/collection', function () {
//    $collection=collect([40,50,70]);
//    return $collection->max();
//    return $collection->min();
//});


//Route::get('/collection', function () {
//    $collection=collect([40,50,70]);
//    return $collection->dd();
//});

//
//Route::get('/collection', function () {
//    $collection=collect([40,50,70]);
//    return $collection->dd();
//});

//Route::get('/collection', function () {
//    $collection=collect([40,50,70]);
//    return $collection->diff('40');
//});


//Route::get('/collection', function () {
//    $collection=collect([40,50,70,40]);
//    return $collection->duplicates();
//});


//Route::get('/collection', function () {
//    $collection=collect([80,50,70,40]);
//    return $collection->except(0,3);
//});

//Route::get('/collection', function () {
//    $collection=collect([80,50,70,40]);
//    return $collection->only(0,3);
//});

//Route::get('/collection', function () {
//    $collection=collect([80,50,70,40]);
//    $filtered=$collection->filter(function($value,$key){
//         return $value >=50;
//    });
//
//    return $filtered->all();
//});


//Route::get('/collection', function () {
//    $collection=collect([80,50,70,40]);
//    $filtered=$collection->filter(function($value,$key){
//        return $value >=50;
//    });
//    return $filtered->first();
//});

//Route::get('/collection', function () {
//    $collection=collect([
//        'ad' => 'emrah',
//        'soyad' => 'yuksel'
//    ]);
//        return $collection->flatten();
//});

//Route::get('/collection', function () {
//    $collection=collect([
//        'ad' => 'emrah',
//        'soyad' => 'yuksel',
//        'soyad1' => 'yuksel1'
//    ]);
//     $collection->forget('soyad');
//     return $collection->all();
//});


//Route::get('/collection', function () {
//    $collection=collect([
//        'ad' => 'emrah',
//        'soyad' => 'yuksel'
//    ]);
//    return "Sonuc".$collection->isNotEmpty();
//});

Route::get('/collection', function () {
    $collection = collect([
        ['id' => '1', 'ad' => 'emrah'],
        ['id' => '2', 'ad' => 'ahmet'],
        ['id' => '3', 'ad' => 'meltem'],
        ['id' => '4', 'ad' => 'idris'],

    ]);
    $plucked = $collection->pluck('ad');
    return $plucked->all();
});


//Route::get('/collection', function () {
//    $collection = collect([
//        ['id' => '1', 'ad' => 'emrah'],
//        ['id' => '2', 'ad' => 'ahmet'],
//        ['id' => '3', 'ad' => 'meltem'],
//        ['id' => '4', 'ad' => 'idris'],
//
//    ]);
//    $plucked = $collection->pluck('ad');
//    return $plucked->all();
//});


//Route::get('/collection', function () {
//    $collection = collect([1,2,3]);
//     $collection->pop();
//    return $collection->all();
//});

//Route::get('/collection', function () {
//    $collection = collect([1,2,3]);
//    $collection->prepend('emrah');
//    return $collection->all();
//});

//Route::get('/collection', function () {
//    $collection = collect([
//        'ad' => 'emrah',
//        'soyad' => 'yuksel',
//        'course' => 'php'
//    ]);
//    $collection->pull('course');
//    return $collection->all();
//});


//Route::get('/collection', function () {
//    $collection = collect([1,2,3,4,5,6,7,8,9]);
//    return $collection->random(2);
//});


//Route::get('/collection', function () {
//    $collection = collect([1,2,3,4,5,6,7,8,9]);
//    if ($collection->search(5))
//    {
//        return "Var";
//    } else {
//        return "Yok";
//    }
//});


//Route::get('/collection', function () {
//    $collection = collect([1,2,3,4,5,6,7,8,9]);
//   $arg=$collection->shuffle();
//   return $arg->all();
//});


//Route::get('/collection', function () {
//    $collection = collect([
//        ['id' => '1', 'ad' => 'melis'],
//        ['id' => '3', 'ad' => 'ahmet'],
//        ['id' => '2', 'ad' => 'turker']
//
//    ]);
//    return $collection->sortBy('id')->values()->all();
//});

//Route::get('/collection', function () {
//    $collection = collect([
//        ['id' => '1', 'ad' => 'melis'],
//        ['id' => '3', 'ad' => 'ahmet'],
//        ['id' => '2', 'ad' => 'turker']
//
//    ]);
//    return $collection->sortByDesc('ad')->values()->all();
//});

//Route::get('/collection', function () {
//    $collection = collect([1,2,3,4,5]);
//    return $collection->sum();
//});


Route::get('/collection', function () {
    $collection = collect([1,1,3,4,5,4,5]);
    return $collection->unique()->values()->all();
});



Route::get('/page2', function () {
    return redirect(url()->previous());
});


Route::get('course', 'CourseController@index')->name('courseGet');
Route::post('courseInsert', 'CourseController@courseInsert')->name('courseInsert');








