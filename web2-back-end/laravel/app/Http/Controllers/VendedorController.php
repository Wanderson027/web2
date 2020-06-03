<?php

namespace App\Http\Controllers;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    
    //Method Illuminate\Routing\ResponseFactory::jason does not exist.
    public function findAll()
    {
        $vendedores = Vendedor::get();//pega todos alunos joga dentro da variavel
        return response()->json($vendedores);// retorna o que o cliente pede
    }
    
    public function find($id)
    {
        $vendedor = Vendedor::find($id);

        if(!$vendedor){
            return response()->json(['mensagem'=> 'Vendedor nao encontrado'], 404);
        }
        return response()->json($vendedor);
    }

    public function create(Request $request)
    {   
        $vendedor = new Vendedor();
        $vendedor->fill($request->all());
        $vendedor->save();
    }

    public function delete($id){
        $vendedor = Vendedor::find($id);

        if(!$vendedor)
        {
            return response()->json(['Erro'=> 'vendedor nao encontrado.'], 404);
        }

        $vendedor->delete();

        return response()->json(['Sucesso'=> 'vendedor deletado com sucesso.'], 200);
    }
    
    public function update(Request $request, $id)
    {
        $vendedor = Vendedor::find($id);
        if(!$vendedor){
            return response()->json(['error '=> 'Vendedor nao encontrado'], 404);
        }
        $vendedor->fill($request->all());
        $vendedor->update();
        return response()->json($vendedor, 200);
    }

}
