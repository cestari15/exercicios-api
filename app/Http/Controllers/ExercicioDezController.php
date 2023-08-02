<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioDezController extends Controller
{
  public function impares()
  {

    $numeros = [];

    for ($i = 1; $i <= 80; $i++) {
      if ($i % 1 == 0) {
        array_push($numeros, $i);
      }
    }

    return json_encode([
      'valores' => $numeros
    ]);
  }
}
