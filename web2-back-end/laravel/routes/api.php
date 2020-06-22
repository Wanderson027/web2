<?php
use App\Funcionario;
use App\Peca;
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

    Route::GET('/funcionarios', 'FuncionarioController@findAll');
    Route::GET('/funcionarios/{id}', 'FuncionarioController@find');
    Route::POST('/funcionarios', 'FuncionarioController@create');
    Route::DELETE('/funcionarios/{id}', 'FuncionarioController@delete');
    Route::PUT('funcionarios/{id}', 'FuncionarioController@update');


    /*
|--------------------------------------------------------------------------
| API Routes Peças
|--------------------------------------------------------------------------    
*/
    Route::GET('/pecas', 'PecaController@findAll');
    Route::GET('/pecas/{id}', 'PecaController@find');
    Route::POST('/pecas', 'PecaController@create');
    Route::DELETE('/pecas/{id}', 'PecaController@delete');
    Route::PUT('pecas/{id}', 'PecaController@update');

       /*
|--------------------------------------------------------------------------
| API Routes Carros
|--------------------------------------------------------------------------    
*/

    Route::GET('/carros', 'CarroController@findAll');
    Route::GET('/carros/{id}', 'CarroController@find');
    Route::POST('/carros', 'CarroController@create');
    Route::DELETE('/carros/{id}', 'CarroController@delete');
    Route::PUT('carros/{id}', 'CarroController@update');