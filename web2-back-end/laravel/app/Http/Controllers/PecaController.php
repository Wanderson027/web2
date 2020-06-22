<?php

namespace App\Http\Controllers;
use App\Models\Peca;
use Illuminate\Http\Request;

class PecaController extends Controller
{
    
    //Method Illuminate\Routing\ResponseFactory::jason does not exist.
    public function findAll()
    {
        $pecas = Peca::get();//pega todos alunos joga dentro da variavel
        return response()->json($pecas);// retorna o que o cliente pede
    }
    
    public function find($id)
    {
        $peca = Peca::find($id);

        if(!$peca){
            return response()->json(['mensagem'=> 'Peca nao encontrado'], 404);
        }
        return response()->json($peca);
    }

    public function create(Request $request){
        $peca = new Peca();
        $peca->fill($request->all());
        $peca->save();
    }

    public function delete($id){
        $peca = Peca::find($id);

        if(!$peca)
        {
            return response()->json(['Erro'=> 'Peca nao encontrado.'], 404);
        }

        $peca->delete();

        return response()->json(['Sucesso'=> 'Peca deletado com sucesso.'], 200);
    }
    
    public function update(Request $request, $id)
    {
        $peca = Peca::find($id);
        if(!$peca){
            return response()->json(['error '=> 'Peca nao encontrado'], 404);
        }
        $peca->fill($request->all());
        $peca->update();
        return response()->json($peca, 200);
    }

}
