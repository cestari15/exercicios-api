<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioSeisFormRequest;
use Illuminate\Http\Request;

class ExercicioSeisController extends Controller
{
    public function idade(ExercicioSeisFormRequest $request){

        if($request->n1 >= 12 && $request->n1 <= 18){
            return json_encode([
                'message' => "O usuário é um adolescente"
            ]);
        } else if($request->n1 < 12 ){
            return json_encode([
                'message' => "O usúario é uma criança"
            ]);
        } else {
            return json_encode([
                'message' => 'O usúario é um adulto'
            ]);
        }


    }
}
