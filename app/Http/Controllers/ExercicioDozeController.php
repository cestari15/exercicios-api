<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioDozeController extends Controller
{
    public function decrescente(){
        $numeros = []; 

        for ($i = 90; $i >= 1; $i--) {
          array_push($numeros, $i);
        }

        return json_encode([
            'valores'=> $numeros
        ]);
    }
}
