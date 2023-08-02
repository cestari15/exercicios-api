<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioOitoFormRequest;
use Illuminate\Http\Request;

class ExercicioOitoController extends Controller
{
    public function exibirTabuada(ExercicioOitoFormRequest $request)
    {
        $numero = []; 

        for ($i = 1; $i <= 10; $i++) {
          array_push($numero, $i*$request->entrada );
        }


        return json_encode([
            'tabuada'=> $numero
        ]);
    }
    
}
