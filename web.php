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
// definição de rotas
Route::get('/index', [CalcController::class, 'index']) -> name('index'); #nome da rota opcional, usado para facilitar a chamada da requisição depois
Route::post('/calcular', [CalcController::class, 'calc']) -> name('calcular');
