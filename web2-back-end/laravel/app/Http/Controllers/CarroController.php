<?php

namespace App\Http\Controllers;
use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    
    //Method Illuminate\Routing\ResponseFactory::jason does not exist.
    public function findAll()
    {
       $carros = Carro::get();
        return response()->json($carros);
    }
    
    public function find($id)
    {
        $carro= Carro::find($id);

        if(!$carro){
            return response()->json(['mensagem'=> 'Carro nao encontrado'], 404);
        }
        return response()->json($carro);
    }

    public function create(Request $request){
        $carro= new Carro();
        $carro->fill($request->all());
        $carro->save();
    }

    public function delete($id){
        $carro= Carro::find($id);

        if(!$carro)
        {
            return response()->json(['Erro'=> 'Carro nao encontrado.'], 404);
        }

        $carro->delete();

        return response()->json(['Sucesso'=> 'Carro deletado com sucesso.'], 200);
    }
    
    public function update(Request $request, $id)
    {
        $carro= Carro::find($id);
        if(!$carro){
            return response()->json(['error '=> 'Carro nao encontrado'], 404);
        }
        $carro->fill($request->all());
        $carro->update();
        return response()->json($carro, 200);
    }

}
