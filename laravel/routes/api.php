<?php
use App\Vendedor;
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

    Route::GET('/vendedores', 'VendedorController@index');//chama a controler e o metodo
    Route::GET('/vendedores/{id}', 'VendedorController@findVendendorById');
    Route::GET('/vendedores', 'VendedorController@criarVendedor');
    Route::DELETE('/vendedores', 'VendedorController@excluirVendedor');
    Route::PUT('vendedores/{id}', 'VendedorController@atualizarVendedor');