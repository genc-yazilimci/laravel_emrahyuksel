<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function index()
    {
        return view('sitehome');
    }

    public function ageCheck(Request $request)
    {
       return "Yaş Doğrulaması Başarılı";
    }
}
