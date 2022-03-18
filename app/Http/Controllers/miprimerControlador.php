<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miprimerControlador extends Controller
{
    public function suma($a,$b){
        return $a + $b;
    }

    public function carrera($cosa){
        return 'Mi carrera es '. $cosa;
    }
}
