<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioSeteController extends Controller
{
    public function exibirNumeros()
    {
        $numeros = []; 

        for ($i = 1; $i <= 70; $i++) {
          array_push($numeros, $i);
        }

        return json_encode([
            'valores'=> $numeros
        ]);
    }
}
