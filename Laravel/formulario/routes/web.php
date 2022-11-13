<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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

Route::get('/', [FormController::class, 'index'])->name('index');

Route::post('/formulario', [FormController::class, 'form']) -> name('confirmado');

Route::post('/cancelado', [FormController::class, 'cancelaCadastro']) -> name('cancelado');

// Esse 'formulario' antes da url tá sendo definido lá no index + nome da classe no controller ('form') + nome da rota ('formulario');
