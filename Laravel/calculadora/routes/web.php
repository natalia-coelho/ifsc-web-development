<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CalcController::class, 'index'])->name('index');
// essa parte está formando uma url com: o controlador (calcController) o nome da classe no controlador ('index') e o nome da rota depois da flecha -> ('index')
// a rota é o que vai fazer a intermedicação entre as requisições 

Route::post('/calcular', [CalcController::class, 'calc'])->name('calcular');
// Esse 'calcular' antes da url tá sendo definido lá no index + nome da classe no controller ('calc') + nome da rota ('calcular');