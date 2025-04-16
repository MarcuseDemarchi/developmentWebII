<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calcSleep;

class SleepController extends Controller
{
    public function index()
    {
        return view('sleep_control.sleep_control');
    }

    public function calcSleep(Request $request)
    {   
        $age = $request->input('age');
        $timeSleep = $request->input('timeSleep');
        $sleepControl = new calcSleep();

        return view('sleep_control.sleep_result', [
            'recomendacao' => $sleepControl->getRecomendacaoSono($age,$timeSleep)
        ]);   
    }
}
