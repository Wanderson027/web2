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

    Route::GET('/vendedores', 'VendedorController@findAll');//chama a controler e o metodo
    Route::GET('/vendedores/{id}', 'VendedorController@find');
    Route::POST('/vendedores', 'VendedorController@create');
    Route::DELETE('/vendedores/{id}', 'VendedorController@delete');
    Route::PUT('vendedores/{id}', 'VendedorController@update');