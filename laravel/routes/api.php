<?php
use App\Alunos;
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

    //  Route::GET('/alunos', 'AlunosController@index');
    
    Route::GET('/alunos', 'AlunosController@index');//chama a controler e o metodo
    Route::GET('/alunos/{id}', 'AlunosController@show'); 
    Route::GET('/alunos', 'AlunosController@create');
    Route::DELETE('/alunos/{id}', 'AlunosController@excluir');
    Route::PUT('alunos/{id}', 'AlunosController@atualizar');