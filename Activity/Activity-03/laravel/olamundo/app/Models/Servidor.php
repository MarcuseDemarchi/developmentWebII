<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Servidor extends Model
{
    use hasFactory;

    public function getAtributo($atributo) {
        return $_SERVER[$atributo];
    }

    public function getDate() {
        date_default_timezone_set('America/Sao_Paulo');
        return date('d/m/Y H:i:s a');
    }
}