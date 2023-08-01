<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioOnzeController extends Controller
{
    public function calculadora(Request $request)
    {

        switch ($request->operação) {
            case 'm' || 'M':
                $resultado = $request->n1 * $request->n2;
                        
              
                break;
            case 'd' || 'D':

              
                    $resultado =    $request->n1 / $request->n2;
               
                break;
            case 'a' || 'A':

                
                    $resultado =    $request->n1 + $request->n2;
              
                break;
            case 's' || 'S':

                    $resultado =    $request->n1 - $request->n2;
              
                break;
                default :
                $resultado = "erro: operação inválida";
        }
        return json_encode([
            'resultado' => $resultado
        ]);
    }
}
