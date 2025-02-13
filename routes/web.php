<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuienesSomosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quienes-somos', [QuienesSomosController::class, 'index'])->name('quienes.somos');