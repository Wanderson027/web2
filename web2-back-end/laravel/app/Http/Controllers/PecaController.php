<?php

namespace App\Http\Controllers;

use App\Entity\Peca;
use Illuminate\Http\Request;

class PecaController extends Controller
{
   
    public function index()
    {
        $peca = Peca::all(); // para trazer todos os peca do banco.
        return response()->json($peca);
    }

    
    public function create(Request $request)
    {
        $peca = new Peca();
        $peca->fill($request->all());
        $peca->save();
        return response()->json($peca, 201);
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $peca = Peca::find($id);

        if(!$peca)
        {
            return response()->json(['Erro'=> 'Peça nao encontrada.'], 404);
        }

        return response()->json($peca);
    }

    
    public function edit(Peca $peca)
    {
        //
    }

    
    public function update($id, Request $request)
    {
        $peca = Peca::find($id);

        if(!$peca)
        {
            return response()->json(['Erro'=> 'Peca nao encontrado.'], 404);
        }

        $peca->fill($request->all());

        $peca->update();

        return response()->json($peca, 200);
    }

    
    public function destroy($id)
    {
        $peca = Peca::find($id);

        if(!$peca)
        {
            return response()->json(['Erro'=> 'Peça nao encontrada.'], 404);
        }

        $peca->delete();

        return response()->json(['Sucesso'=> 'Peça deletada com sucesso.'], 200);
    }
}
