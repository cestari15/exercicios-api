<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioTresFormRequest;
use Illuminate\Http\Request;

class ExercicioTresController extends Controller
{
    public function media(ExercicioTresFormRequest $request)
    {
        

            return json_encode([
                'media'=>  ($request->n1 + $request->n2 +  $request->n3) / 3
            ]);
         
    }
}
