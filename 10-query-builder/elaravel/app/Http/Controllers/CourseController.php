<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Validator;
use App\Rules\Age;

class CourseController extends Controller
{
    public function index()
    {
        return view('course');
    }

    public function courseInsert(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'course_title' => 'same:course_content',
        ])->validate();


    }
}
