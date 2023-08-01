<?php

use App\Http\Controllers\ExercicioCincoController;
use App\Http\Controllers\ExercicioDezController;
use App\Http\Controllers\ExercicioDoisController;
use App\Http\Controllers\ExercicioDozeController;
use App\Http\Controllers\ExercicioNoveController;
use App\Http\Controllers\ExercicioOitoController;
use App\Http\Controllers\ExercicioOnzeController;
use App\Http\Controllers\ExercicioQuatroController;
use App\Http\Controllers\ExercicioSeisController;
use App\Http\Controllers\ExercicioSeteController;
use App\Http\Controllers\ExercicioTresController;
use App\Http\Controllers\ExercicioTrezeController;
use App\Http\Controllers\ExercicioUmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('exercicio/um', 
[ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', 
[ExercicioDoisController::class, 'retornarMaior']);

Route::get('exercicio/sete', 
[ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/tres', 
[ExercicioTresController::class, 'media']);

Route::post('exercicio/quatro', 
[ExercicioQuatroController::class, 'verificador']);

Route::get('exercicio/cinco', 
[ExercicioCincoController::class, 'divisivelporquatro']);

Route::post('exercicio/seis', 
[ExercicioSeisController::class, 'idade']);

Route::post('exercicio/nove', 
[ExercicioNoveController::class, 'divisivelPeloUsuario']);

Route::post('exercicio/oito', 
[ExercicioOitoController::class, 'exibirTabuada']);

Route::get('exercicio/dez', 
[ExercicioDezController::class, 'impares']);

Route::post('exercicios/onze', [ExercicioOnzeController::class, 'Calculadora']);

Route::get('exercicio/doze',
[ExercicioDozeController::class, 'decrescente']);

Route::get('exercicio/treze', [ExercicioTrezeController::class, 'igual5']);



