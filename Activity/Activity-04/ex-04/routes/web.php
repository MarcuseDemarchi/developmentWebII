<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IMCController;
use App\Http\Controllers\SleepController;
use App\Http\Controllers\TravelCostController;

Route::get('/', function () {
    return view('home');
});

Route::get('/imc', [IMCController::class, 'index']);
Route::post('/imc/calculate', [IMCController::class, 'returnIMC']);

Route::resource('/sleep', SleepController::class);

Route::resource('/travel-cost', TravelCostController::class);