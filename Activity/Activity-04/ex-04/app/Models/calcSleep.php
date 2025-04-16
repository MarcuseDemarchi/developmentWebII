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
                if ($sleep_time >= 9 && $sleep_time <= 11){
                    return 'Sono Ideal para Idade Escolar';
                }elseif ($sleep_time > 11){
                    return 'Sono ultrapassou o recomendado de tempo para Idade Escolar'; 
                }else{
                    return 'Atenção : O tempo em questão é pouco para Idade Escolar';
                }                         
                break;            
            case $age >= 14 && $age <= 17:
                if ($sleep_time >= 8 && $sleep_time <= 10){
                    return 'Sono Ideal para Jovens Adultos';
                }elseif ($sleep_time > 10){
                    return 'Sono ultrapassou o recomendado de tempo para Jovens Adultos'; 
                }else{
                    return 'Atenção : O tempo em questão é pouco para Jovens Adultos';
                }                        
                break;            
            case ($age >= 18 && $age <= 25) || ($age >= 26 && $age <= 64):
                if ($sleep_time >= 7 && $sleep_time <= 9){
                    return 'Sono Ideal para adultos';
                }elseif ($sleep_time > 9){
                    return 'Sono ultrapassou o recomendado de tempo para adultos'; 
                }else{
                    return 'Atenção : O tempo em questão é pouco para adultos';
                }                        
                break;    
            case $age >= 64:
                if ($sleep_time >= 7 && $sleep_time <= 8){
                    return 'Sono Ideal para idosos';
                }elseif ($sleep_time > 8){
                    return 'Sono ultrapassou o recomendado de tempo para idosos'; 
                }else{
                    return 'Atenção : O tempo em questão é pouco para idosos';
                }     
                break;                        
        } 
    }
}