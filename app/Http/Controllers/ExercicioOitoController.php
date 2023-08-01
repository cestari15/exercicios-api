<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioOitoController extends Controller
{
    public function exibirTabuada(Request $request)
    {
        $numero = []; 

        for ($i = 1; $i <= 10; $i++) {
          array_push($numero, $i*$request->Entrada );
        }


        return json_encode([
            'tabuada'=> $numero
        ]);
    }
    
}
