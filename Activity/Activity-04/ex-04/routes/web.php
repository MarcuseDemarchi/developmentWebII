<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IMCController;
use App\Http\Controllers\SleepController;
use App\Http\Controllers\TravelCostController;

Route::get('/', function () {
    return view('home');
});

Route::get('/imc', [IMCController::class, 'index']);
Route::post('/imc/calculate', [IMCController::class, 'returnIMC'])->name('calculaImc');

Route::get('/sleep_control', [SleepController::class, 'index']);
Route::post('/imc/sleepCalculate', [SleepController::class, 'calcSleep'])->name('sleepCalculate');

Route::get('/travel_cost', [TravelCostController::class, 'index']);
Route::post('/travel_cost/calculate', [TravelCostController::class, 'calculate'])->name('travelCalculate');
