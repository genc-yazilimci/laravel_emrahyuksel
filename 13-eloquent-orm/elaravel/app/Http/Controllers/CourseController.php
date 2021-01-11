<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Course;

class CourseController extends Controller
{
    public function index()
    {
//        $course=DB::table('course')->get();

//        $course=Course::find(1);
//        $course=Course::where('id',1)->first();
//        $course=Course::where('course_must',1)->get();
//
//
////        echo $course->course_title;
////       dd($course);
//        foreach($course as $key)
//        {
//            echo $key->course_content."<br>";
//        }


//        $course= new Course;
//        $course->course_title='Php Title 01';
//        $course->course_content='Php Content 01';
//        $course->course_must=100;
//        $course->save();

//        Course::create([
//            'course_title' => 'Course Title Create 01',
//            'course_content' => 'Course Content Create 01',
//            'course_must' => 500
//        ]);

//        Course::firstOrCreate([
//            'course_title' => 'Course Title Create 02',
//            'course_content' => 'Course Content Create 01',
//            'course_must' => 500
//        ]);

//        $course=Course::firstOrNew([
//            'course_title' => 'Course Title Create 13',
//            'course_content' => 'Course Content Create 01',
//            'course_must' => 500
//        ]);
//
//       if (!$course->exists)
//       {
//          $course->save();
//       }

//
//        $course=Course::firstOrNew([
//            'course_title' => 'Course Title Create 13',
//            'course_content' => 'Course Content Create 01',
//            'course_must' => 500
//        ]);
//
//        if (!$course->exists)
//        {
//            $course->save();
//        }

//        $course=Course::find(1);
////        $course->course_title='Title 01 Update';
////        $course->course_content='Content 01 Update';
////        $course->save();

//            $course=Course::where('id',1)->update([
//                'course_title' => 'Where Title Update'
//            ]);

//        $course=Course::find(1);
//        $course->delete();

//        $course=Course::Where('id',2)->delete();

//        Course::destroy(4,5);

//        Course::Where('id',3)->delete();

//        $course=Course::withTrashed()->restore();
//        foreach ($course as $key)
//        {
//            echo $key->course_title."<br>";
//        }

//        Course::Where('id',3)->restore();

        Course::withTrashed()->Where('id',3)->forceDelete();

    }
}
