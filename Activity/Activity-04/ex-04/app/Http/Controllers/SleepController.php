<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SleepController extends Controller
{
    public function index()
    {
        return view('sleep_control.sleep_control');
    }

    public function calcSleep()
    {
        
    }
}
