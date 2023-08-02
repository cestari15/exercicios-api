<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioQuatroFormRequest;
use Illuminate\Http\Request;

class ExercicioQuatroController extends Controller
{
    public function verificador(ExercicioQuatroFormRequest $request)
    {
        $entrada = $request->entrada;

        if ($entrada % 2 == 0) {
            return json_encode([
                "É par"
            ]);
        } else {
            return json_encode([
                "É impar"
            ]);
        }
    }
}
