<?php

namespace App\Http\Controllers;

use App\Entity\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    
    public function index()
    {
        $funcionario = Funcionario::all(); // para trazer todos os funcionario do banco de dados.
        return response()->json($funcionario);
    }

    public function create(Request $request)
    {
        $funcionario = new Funcionario();
        $funcionario->fill($request->all());
        $funcionario->save();
        return response()->json($funcionario, 201);
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $funcionario = Funcionario::find($id);

        if(!$funcionario) 
        {
            return response()->json(['Erro'=> 'Funcionario nao encontrado.'], 404);
        }

        return response()->json($funcionario);
    }

    
    public function edit(Funcionario $funcionario)
    {
        //
    }

    
    public function update($id, Request $request)
    {
        $funcionario = Funcionario::find($id);

        if(!$funcionario)
        {
            return response()->json(['Erro'=> 'Funcionario nao encontrado.'], 404);
        }

        $funcionario->fill($request->all());

        $funcionario->update();

        return response()->json($funcionario, 200);
    }

    
    public function destroy($id)
    {
        $funcionario = Funcionario::find($id);

        if(!$funcionario)
        {
            return response()->json(['Erro'=> 'Funcionario nao encontrado.'], 404);
        }

        $funcionario->delete();

        return response()->json(['Sucesso'=> 'Funcionario deletado com sucesso.'], 200);
    }
}
