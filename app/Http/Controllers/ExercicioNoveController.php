<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioNoveFormRequest;
use Illuminate\Http\Request;

class ExercicioNoveController extends Controller
{
    public function divisivelPeloUsuario(ExercicioNoveFormRequest $request)
    {
        $numero = [];

        for ($i = 1; $i <= 100; $i++) {

            if ($i % $request->divisivel == 0) {
                array_push($numero, $i . ' é divisivel');
            } else {
                array_push($numero, $i . ' não é divisivel');
            }
        }
            return json_encode([
                'valores' => $numero
            ]);
       
    }
}
