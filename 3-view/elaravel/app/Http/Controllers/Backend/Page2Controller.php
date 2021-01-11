<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page2Controller extends Controller
{
    public function index($ad=null,$soyad=null)
    {
        echo $ad." ".$soyad;
       if (!isset($ad))
       {
           echo "parametre yok";
       }
    }
}
