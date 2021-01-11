<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page4Controller extends Controller
{
    public function index()
    {
        echo "<a href='".route('backend.page3')."'>Page 3</a>";
    }
}
