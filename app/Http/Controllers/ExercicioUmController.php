<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioUmController extends Controller
{
    public function multiplicar(Request $request){
        $primeiraEntrada = $request->primeiro_numero;
        $segundaEntrada = $request->segundo_numero;   

        return json_encode([
            'resultado' => $primeiraEntrada * $segundaEntrada
        ]); 
    }
}
