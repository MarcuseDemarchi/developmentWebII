<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return 'Hello, World!';
});

Route::resource('contato', ContatoController::class);