<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::get('/funcionario', 'FuncionarioController@index');
Route::get('/funcionario/{id}', 'FuncionarioController@show');
Route::put('/funcionario/{id}', 'FuncionarioController@update');
Route::post('/funcionario', 'FuncionarioController@create');
Route::delete('/funcionario/{id}', 'FuncionarioController@destroy');

Route::get('/peca', 'PecaController@index');
Route::get('/peca/{id}', 'PecaController@show');
Route::put('/peca/{id}', 'PecaController@update');
Route::post('/peca', 'PecaController@create');
Route::delete('/peca/{id}', 'PecaController@destroy');


Route::get('/carros', 'CarroController@index');
Route::get('/carros/{id}', 'CarroController@show');
Route::put('/carros/{id}', 'CarroController@update');
Route::post('/carros', 'CarroController@create');
Route::delete('/carros/{id}', 'CarroController@destroy');

Route::get('/servicos', 'ServicoController@index');
Route::get('/servicos/{id}', 'ServicoController@show');
Route::put('/servicos/{id}', 'ServicoController@update');
Route::post('/servicos', 'ServicoController@create');
Route::delete('/servicos/{id}', 'ServicoController@destroy');




