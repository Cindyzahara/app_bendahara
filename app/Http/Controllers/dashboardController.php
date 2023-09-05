<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function main()
    {
        return view('dashboard.dashboard');
    }
}
