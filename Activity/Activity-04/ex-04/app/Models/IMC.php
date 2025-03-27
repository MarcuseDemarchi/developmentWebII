<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IMC extends Model
{
    public function getIMCClassification($imc)
    {
        if ($imc < 18.5) {
            return 'Abaixo do peso';
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            return 'Peso normal';
        } elseif ($imc >= 25 && $imc < 29.9) {
            return 'Sobrepeso';
        } else {
            return 'Obesidade';
        }
    }

    public function calculateIMC($weigth, $height)
    {
        if ($height <= 0 || $weight <= 0) {
            throw new \Exception('Height and weight must be positive numbers.');
        }

        $imc = $weight / ($height * $height);
        return round($imc, 2);
    }
}
