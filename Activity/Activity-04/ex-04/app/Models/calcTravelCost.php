<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class calcTravelcost extends Model
{
    public $fuelType;
    public $fuelPrice;
    public $distance;
    public $consumption;

    public function __construct($fuelType, $fuelPrice, $distance, $consumption)
    {
        $this->fuelType   = $fuelType;
        $this->fuelPrice  = $fuelPrice;
        $this->distance   = $distance;
        $this->consumption = $consumption;
    }

    public function getTotalLiters()
    {
        return $this->distance / $this->consumption;
    }

    public function getTotalCost()
    {
        return $this->getTotalLiters() * $this->fuelPrice;
    }
}