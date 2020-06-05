<?php

namespace App\Http\Controllers;

use App\Entity\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    
    public function index()
    {
        $carros = Carro::all(); // para trazer todsa as carros do banco.
        return response()->json($carros);
    }

    
    public function create(Request $request)
    {
        $carro = new Carro();
        $carro->fill($request->all());
        $carro->save();
        return response()->json($carro, 201);
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $carro = Carro::find($id);

        if(!$carro)
        {
            return response()->json(['Erro'=> 'Carro não encontrado.'], 404);
        }

        return response()->json($carro);
    }

   
    public function edit(Carro $carro)
    {
        //
    }

    
    public function update($id, Request $request)
    {
        $carro =Carro::find($id);

        if(!$carro)
        {
            return response()->json(['Erro'=> 'Carro nao encontrada.'], 404);
        }

        $carro->fill($request->all());

        $carro->update();

        return response()->json($carro, 200);
    }

    
    public function destroy($id)
    {
        $carro = Carro::find($id);

        if(!$carro)
        {
            return response()->json(['Erro'=> 'Carro nao encontrada.'], 404);
        }

        $carro->delete();

        return response()->json(['Sucesso'=> 'Carro deletada com sucesso.'], 200);
    }
}
