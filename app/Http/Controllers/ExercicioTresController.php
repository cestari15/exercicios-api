<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioTresController extends Controller
{
    public function media(Request $request)
    {
        

            return json_encode([
                'media'=>  ($request->n1 + $request->n2 +  $request->n3) / 3
            ]);
         
    }
}
