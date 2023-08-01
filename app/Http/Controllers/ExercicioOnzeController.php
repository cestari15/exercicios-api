<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioOnzeController extends Controller
{
    public function calculadora(Request $request)
    {
        
        switch ($request->operação) {
            case 'M':
                $resultado = $request->n1 * $request->n2;
                        
              
                break;
            case  'D':

              
                    $resultado =    $request->n1 / $request->n2;
               
                break;
            case  'A':

                
                    $resultado =    $request->n1 + $request->n2;
              
                break;
            case  'S':

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