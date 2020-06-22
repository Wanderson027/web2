<?php

namespace App\Http\Controllers;
use App\Models\Loja;
use Illuminate\Http\Request;

class LojaController extends Controller
{
    
    //Method Illuminate\Routing\ResponseFactory::jason does not exist.
    public function findAll()
    {
        $lojas = Loja::get();
        return response()->json($lojas);
    }
    
    public function find($id)
    {
        $loja = Loja::find($id);

        if(!$loja){
            return response()->json(['mensagem'=> 'Loja nao encontrado'], 404);
        }
        return response()->json($loja);
    }

    public function create(Request $request){
        $loja = new Loja();
        $loja->fill($request->all());
        $loja->save();
    }

    public function delete($id){
        $loja = Loja::find($id);

        if(!$loja)
        {
            return response()->json(['Erro'=> 'Loja nao encontrado.'], 404);
        }

        $loja->delete();

        return response()->json(['Sucesso'=> 'Loja deletado com sucesso.'], 200);
    }
    
    public function update(Request $request, $id)
    {
        $loja = Loja::find($id);
        if(!$loja){
            return response()->json(['error '=> 'Loja nao encontrado'], 404);
        }
        $loja->fill($request->all());
        $loja->update();
        return response()->json($loja, 200);
    }

}
