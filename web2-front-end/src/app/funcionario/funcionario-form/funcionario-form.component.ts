import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Funcionario } from './funcionario.model';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-funcionario-form',
  templateUrl: './funcionario-form.component.html',
  styleUrls: ['./funcionario-form.component.css']
})
export class FuncionarioFormComponent implements OnInit {
  private API_URL = 'http://127.0.0.1:8000/api/funcionarios';

  formulario: FormGroup;

  constructor(
    private fb:FormBuilder,
    private http: HttpClient
  ) {
    
   }

  ngOnInit(): void {
    this.criarForm(new Funcionario);
  }


  criarForm (funcionario: Funcionario){
    this.formulario = this.fb.group({
      nome: [funcionario.nome, Validators.required],
      funcao: [funcionario.funcao, Validators.required]
    })
  }
  salvarFuncionario(){
    console.log(this.formulario.value);
    this.http.post(this.API_URL,this.formulario.value).subscribe;{
      data =>{
        console.log('dados salvo com sucesso')
      }
      console.error();
      
    }
  }

}
