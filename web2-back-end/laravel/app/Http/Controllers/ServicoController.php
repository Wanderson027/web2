<?php

namespace App\Http\Controllers;

use App\Entity\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    
    public function index()
    {
        $servico = Servico::all(); // para trazer todsa as servico do banco.
        return response()->json($servico);
    }

    
    public function create(Request $request)
    {
        $servico = new Servico();
        $servico->fill($request->all());
        $servico->save();
        return response()->json($servico, 201);
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $servico = Servico::find($id);

        if(!$servico)
        {
            return response()->json(['Erro'=> 'Servico não encontrado (show).'], 404);
        }

        return response()->json($servico);
    }

   
    public function edit(Servico $servico)
    {
        //
    }

    
    public function update($id, Request $request)
    {
        $servico =Servico::find($id);

        if(!$servico)
        {
            return response()->json(['Erro'=> 'Servico nao encontrada.(update)'], 404);
        }

        $servico->fill($request->all());

        $servico->update();

        return response()->json($servico, 200);
    }

    
    public function destroy($id)
    {
        $servico = Servico::find($id);

        if(!$servico)
        {
            return response()->json(['Erro'=> 'Servico nao encontrada.(destroy)'], 404);
        }

        $servico->delete();

        return response()->json(['Sucesso'=> 'Servico deletada com sucesso.'], 200);
    }
}
