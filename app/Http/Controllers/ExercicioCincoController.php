<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioCincoFormRequest;
use Illuminate\Http\Request;

class ExercicioCincoController extends Controller
{
    public function divisivelporquatro(ExercicioCincoFormRequest $request)
    {

        if ($request->numero % 4 == 0) {
            return json_encode([
                'message' =>"É divisivel por 4"
            ]);
        } else {
            return json_encode([
                'message' => " Não é divisivel por 4"
            ]);
        }
    }
}
