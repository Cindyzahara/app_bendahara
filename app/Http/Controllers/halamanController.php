<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halamanController extends Controller
{
    public function tingkat1()
    {
        return view('Tingkat1.index');
    }
    public function tingkat2()
    {
        return view('Tingkat2.index');
    }
    public function tingkat3()
    {
        return view('Tingkat3.index');
    }
}
