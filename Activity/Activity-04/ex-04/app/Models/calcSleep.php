<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class calcSleep extends Model
{
    public function getRecomendacaoSono($age,$sleep_time){
        switch($age){
            case $age <= 0.3:
                if ($sleep_time >= 14 && $sleep_time <= 17){
                    return 'Sono Ideal para Recem-Nascidos';
                }elseif ($sleep_time > 17){
                    return 'Sono ultrapassou o recomendado de tempo para Recem-nascidos';
                }else{
                    return 'Atenção : O tempo em questão é pouco para recem-nascidos';
                }                     
                break;            
            case $age >= 0.4 && $age <= 0.11:
                if ($sleep_time >= 12 && $sleep_time <= 15){
                    return 'Sono Ideal para bebes';
                }elseif ($sleep_time > 15){
                    return 'Sono ultrapassou o recomendado de tempo para bebes';              
                }else{
                    return 'Atenção : O tempo em questão é pouco para bebes';
                }                     
                break;            
            case $age >= 1 && $age <= 2:
                if ($sleep_time >= 10 && $sleep_time <= 13){
                    return 'Sono Ideal para primeira infancia';
                }elseif ($sleep_time > 13){
                    return 'Sono ultrapassou o recomendado de tempo para primeira infancia'; 
                }else{
                    return 'Atenção : O tempo em questão é pouco para primeira infancia';
                }                                     
                break;            
            case $age >= 3 && $age <= 5:
                if ($sleep_time >= 10 && $sleep_time <= 13){
                    return 'Sono Ideal para pré-escolar';
                }elseif ($sleep_time > 13){
                    return 'Sono ultrapassou o recomendado de tempo para pré-escolar'; 
                }else{
                    return 'Atenção : O tempo em questão é pouco para pré-escolar';
                }                      
                break;                    
            case $age >= 6 && $age <= 13:
                break;            
            case $age >= 14 && $age <= 17:
                break;            
            case $age >= 18 && $age <= 25:
                break;
            case $age >= 26 && $age <= 64:
                break;
            case $age >= 64:
                break;                        
        } 
    }
}