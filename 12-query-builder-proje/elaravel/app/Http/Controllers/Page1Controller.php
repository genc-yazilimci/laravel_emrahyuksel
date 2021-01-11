<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Page1Controller extends Controller
{
    public function index()
    {
//            if (Schema::hasTable('course'))
//            {
//                echo "blogs isminde tablo mevcut";
//            }

//        Schema::rename('course','new_course');

      if ( Schema::drop('blogs'))
      {
          echo "İşlem başarılı";
      }

    }

    }
