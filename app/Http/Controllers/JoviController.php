<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoviController extends Controller
{
    public function index()
    {
        $mensaje = "Hola Jovi";
        return view('jovi', compact('mensaje'));
    }
}