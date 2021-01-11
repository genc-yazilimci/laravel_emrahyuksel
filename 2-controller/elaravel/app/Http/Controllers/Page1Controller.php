<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    public function index()
    {
        echo "Emrah Yüksel Index Metot";
    }

    public function show(){
        echo "Show Metot Çalıştı";
    }
}
