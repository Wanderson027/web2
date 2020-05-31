<?php

namespace App\Http\Controllers;

use App\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
  
    public function index()
    {
        $alunos = Alunos::all();                      //pega todos alunos e joga dentro da variavel
        
        return response()->json($alunos);             //retorna a resposta e com todos alunos
        
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $aluno = Alunos::find($id); 

        if(!$aluno){
            return response()->json(['mensagem'=>'Aluno nao existe!']);       
        }else
        {
            return response()->json($aluno); //retorna uma resposta usando json do aluno
        }
    }

   
    public function edit(Alunos $alunos)
    {
        //
    }

    
    public function update(Request $request, Alunos $alunos)
    {
        //
    }

   
    public function destroy(Alunos $alunos)
    {
        //
    }
}
