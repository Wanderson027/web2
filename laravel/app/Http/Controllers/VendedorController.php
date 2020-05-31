<?php

namespace App\Http\Controllers;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    
    //Method Illuminate\Routing\ResponseFactory::jason does not exist.
    public function index()
    {
        $vendedores = Vendedor::all();//pega todos alunos joga dentro da variavel
        return response()->json($vendedor);// retorna o que o cliente pede
    }
    
    public function findVendendorById($id)
    {
        $vendedor = Vendedor::find($id);

        if(!$vendedor){
            return response()->json(['mensagem'=> 'Vendeor nao encontrado'], 404);
        }
        return response()->json($vendedor);
    }

    public function criarVendedor(Request $request)
    {
         $vendedor = new Vendedor();
        $vendedor->fill($request->all());
        $vendedor->save();
    }

    public function excluirVendedor($id){
        $vendedor = Vendedor::find($id);

        if ($vendedor != null){
            Vendedor::delete($vendedor);
        }else{
            return response()->json(['error '=> 'Vendedor nao encontrado'], 404);
        }
    }
   
    public function editarVendedor($id)
    {
      //nada
    }

    
    public function atualizarVendedor(Request $request, $id)
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
