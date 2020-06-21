<?php

namespace App\Http\Controllers;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    
    //Method Illuminate\Routing\ResponseFactory::jason does not exist.
    public function findAll()
    {
        $funcionarios = Funcionario::get();//pega todos alunos joga dentro da variavel
        return response()->json($funcionarios);// retorna o que o cliente pede
    }
    
    public function find($id)
    {
        $funcionario = Funcionario::find($id);

        if(!$funcionario){
            return response()->json(['mensagem'=> 'Funcionario nao encontrado'], 404);
        }
        return response()->json($funcionario);
    }

    public function create(Request $request){
        $funcionario = new Funcionario();
        $funcionario->fill($request->all());
        $funcionario->save();
    }

    public function delete($id){
        $funcionario = Funcionario::find($id);

        if(!$funcionario)
        {
            return response()->json(['Erro'=> 'Funcionario nao encontrado.'], 404);
        }

        $funcionario->delete();

        return response()->json(['Sucesso'=> 'Funcionario deletado com sucesso.'], 200);
    }
    
    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::find($id);
        if(!$funcionario){
            return response()->json(['error '=> 'Funcionario nao encontrado'], 404);
        }
        $funcionario->fill($request->all());
        $funcionario->update();
        return response()->json($funcionario, 200);
    }

}
