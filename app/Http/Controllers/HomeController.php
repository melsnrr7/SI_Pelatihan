<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index1()
    {
        return view('administrator.index');
    }
    public function index2()
    {
        return view('admin_pelatihan.index');
    }
}
