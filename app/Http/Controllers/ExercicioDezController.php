<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioDezController extends Controller
{
    public function impares(Request $request)
    {

        for ($i = 1; $i < 80; $i++) {
            if ($i % 1 == 0) {
                return json_encode([
                    'impar' => $i
                ]);
            }
        }
    }
}
