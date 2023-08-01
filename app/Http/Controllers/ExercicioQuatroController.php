<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioQuatroController extends Controller
{
    public function verificador(Request $request)
    {
        $Entrada = $request->Entrada;

        if ($Entrada % 2 == 0) {
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
