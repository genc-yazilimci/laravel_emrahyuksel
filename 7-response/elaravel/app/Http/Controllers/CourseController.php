<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('course');
    }

    public function courseInsert(Request $request)
    {
//        dd($request);
//        return $request->all();
//        return $request->input();

//        echo $request->input('course_title');
//        echo "<br>";
//        echo $request->input('course_content');
//        echo "<br>";
//        echo $request->input('course_must');
//        echo "<br>";

//        echo $request->course_title;
//        echo "<br>";
//        echo $request->course_content;
//        echo "<br>";
//        echo $request->course_must;
//        echo "<br>";

//        if ($request->is('admin/*'))
//        {
//            return $request->all();
//        } else {
//            echo "beklenmeyen istek";
//        }

//        echo $request->url();

//      if ($request->isMethod('post'))
//      {
//          echo "post metodu";
//      } else {
//          echo "get metodu";
//      }

//        return  $request->except(['_token']);

//        return  $request->only(['_token','course_title']);

//        if ($request->has('course_title'))
//        {
//            echo "Değer Var";
//        }

//        if ($request->filled('course_title'))
//        {
//            echo "Değer Var";
//        } else {
//            echo "Değer Yok";
//        }

//        $request->flash();
//
//        if ($request->filled('course_title'))
//        {
//            $request->all();
//        } else {
//            return back();
//        }

//        $request->flashExcept('course_must');
//        return back();

//            return $request->file('course_file');
//            dd($request->file('course_file'));

//        if ($request->hasFile('course_file'))
//        {
//            echo "işlemler başladı..";
//        } else {
//            return back()->with('status','Dosya eklemelisiniz!');
//        }

        return $request->all();
    }
}
