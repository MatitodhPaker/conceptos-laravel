<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class saludoController extends Controller
{
    public function __invoke($nombre,$edad=null)
    {
        if ($edad) {
            return "Hola $nombre de $edad años";
        }else {
            return "Hola $nombre";
        }
    }
}
