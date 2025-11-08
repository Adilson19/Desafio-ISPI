<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('historico', function (){
    return view('historico');
});
Route::resource('usuarios', UsuariosController::class);
Route::resource('funcionarios', FuncionarioController::class);
Route::resource('cidades', CidadeController::class);
Route::resource('carros', CarroController::class);
Route::resource('produtos', ProdutoController::class);
Route::get('subscribe', function(){
    return view('subscribe');
});
