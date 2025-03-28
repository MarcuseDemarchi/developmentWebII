<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IMC;

class IMCController extends Controller
{
    public function index()
    {
        return view('imc.imc');
    }

    public function returnIMC(Request $request)
    {
        $weight = $request->input('weight');
        $height = $request->input('height');

        $imc = new IMC();
        $imcValue = $imc->calculateIMC($weight, $height);

        return view('imc.imc_result', [
            'imc' => $imc->getIMCClassification($imcValue),
            'imcValue' => $imcValue
        ]);
    }
}
