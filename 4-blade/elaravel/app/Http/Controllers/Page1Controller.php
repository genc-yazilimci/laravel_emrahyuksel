<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    public function index()
    {
        $data=[
           'php' =>
           [
               'title' => 'php',
               'egitmen' => 'Emrah Yüksel',
               'sure' => '45 Saat'
           ],
            'bootstrap' =>
                [
                    'title' => 'Bootstrap',
                    'egitmen' => 'Emrah Yüksel',
                    'sure' => '15 Saat'
                ]
        ];
       return view('Backend.index',$data);
    }

    public function show(){
        echo "Show Metot Çalıştı";
    }
}
