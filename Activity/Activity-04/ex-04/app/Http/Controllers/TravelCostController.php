<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calcTravelCost;

class TravelCostController extends Controller
{
    public function index()
    {
        return view('travel_cost.travel_cost');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'fuel_type' => 'required',
            'fuel_price' => 'required|numeric',
            'distance' => 'required|numeric',
            'consumption' => 'required|numeric',
        ]);

        $travel = new calcTravelCost(
            $request->fuel_type,
            $request->fuel_price,
            $request->distance,
            $request->consumption
        );

        $totalLiters = $travel->getTotalLiters();
        $totalCost = $travel->getTotalCost();

        return view('travel_cost.travel_result', [
            'fuelType'     => $travel->fuelType,
            'fuelPrice'    => $travel->fuelPrice,
            'distance'     => $travel->distance,
            'consumption'  => $travel->consumption,
            'totalLiters'  => $totalLiters,
            'totalCost'    => $totalCost,
        ]);
    }
}