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

/*
|--------------------------------------------------------------------------
| API Routes Serviços
|--------------------------------------------------------------------------    
*/    

    Route::GET('/servicos', 'ServicoController@findAll');
    Route::GET('/servicos/{id}', 'ServicoController@find');
    Route::POST('/servicos', 'ServicoController@create');
    Route::DELETE('/servicos/{id}', 'ServicoController@delete');
    Route::PUT('servicos/{id}', 'ServicoController@update');

/*
|--------------------------------------------------------------------------
| API Routes Lojas
|--------------------------------------------------------------------------    
*/     

    Route::GET('/lojas', 'LojaController@findAll');
    Route::GET('/lojas/{id}', 'LojaController@find');
    Route::POST('/lojas', 'LojaController@create');
    Route::DELETE('/lojas/{id}', 'LojaController@delete');
    Route::PUT('lojas/{id}', 'LojaController@update');

/*
|--------------------------------------------------------------------------
| API Routes Lojas
|--------------------------------------------------------------------------    
*/     

    Route::GET('/clientes', 'ClienteController@findAll');
    Route::GET('/clientes/{id}', 'ClienteController@find');
    Route::POST('/clientes', 'ClienteController@create');
    Route::DELETE('/clientes/{id}', 'ClienteController@delete');
    Route::PUT('clientes/{id}', 'ClienteController@update');    