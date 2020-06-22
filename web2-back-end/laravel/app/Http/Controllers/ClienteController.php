<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    //Method Illuminate\Routing\ResponseFactory::jason does not exist.
    public function findAll()
    {
        $clientes = Cliente::get();
        return response()->json($clientes);
    }
    
    public function find($id)
    {
        $cliente = Cliente::find($id);

        if(!$cliente){
            return response()->json(['mensagem'=> 'Cliente nao encontrado'], 404);
        }
        return response()->json($cliente);
    }

    public function create(Request $request){
        $cliente = new Cliente();
        $cliente->fill($request->all());
        $cliente->save();
    }

    public function delete($id){
        $cliente = Cliente::find($id);

        if(!$cliente)
        {
            return response()->json(['Erro'=> 'Cliente nao encontrado.'], 404);
        }

        $cliente->delete();

        return response()->json(['Sucesso'=> 'Cliente deletado com sucesso.'], 200);
    }
    
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        if(!$cliente){
            return response()->json(['error '=> 'Cliente nao encontrado'], 404);
        }
        $cliente->fill($request->all());
        $cliente->update();
        return response()->json($cliente, 200);
    }

}
