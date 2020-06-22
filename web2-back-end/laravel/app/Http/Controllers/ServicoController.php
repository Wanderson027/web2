<?php

namespace App\Http\Controllers;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    
    //Method Illuminate\Routing\ResponseFactory::jason does not exist.
    public function findAll()
    {
        $servicos = Servico::get();
        return response()->json($servicos);
    }
    
    public function find($id)
    {
        $servico = Servico::find($id);

        if(!$servico){
            return response()->json(['mensagem'=> 'Servico nao encontrado'], 404);
        }
        return response()->json($servico);
    }

    public function create(Request $request){
        $servico = new Servico();
        $servico->fill($request->all());
        $servico->save();
    }

    public function delete($id){
        $servico = Servico::find($id);

        if(!$servico)
        {
            return response()->json(['Erro'=> 'Servico nao encontrado.'], 404);
        }

        $servico->delete();

        return response()->json(['Sucesso'=> 'Servico deletado com sucesso.'], 200);
    }
    
    public function update(Request $request, $id)
    {
        $servico = Servico::find($id);
        if(!$servico){
            return response()->json(['error '=> 'Servico nao encontrado'], 404);
        }
        $servico->fill($request->all());
        $servico->update();
        return response()->json($servico, 200);
    }

}
