import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {FormBuilder, FormControl, FormGroup} from '@angular/forms';
import { Funcionario } from './funcionario.models';

@Component({
  selector: 'app-funcionario',
  templateUrl: './funcionario.component.html',
  styleUrls: ['./funcionario.component.css']
})
export class FuncionarioComponent implements OnInit {

  private API_URL = 'http://127.0.0.1:8000/api/funcionarios';
  public Funcionarios;

  constructor(
    private http: HttpClient
  ) { 

  }

  ngOnInit(): void {
    this.listarFuncionarios();
  }

public delete(funcionario: Funcionario){

  this.http.delete(this.API_URL+funcionario.id).subscribe(
    resultado => {
      console.log('Aluno excluido')
    }, erro =>{
      console.log('erro ao excluir')
    })
};


  public listarFuncionarios(){
    this.http.get(this.API_URL).subscribe(
      res=>{
        this.Funcionarios = res;
        console.log(this.Funcionarios);
       
      }
    )
  }
}
export class FormFieldAppearanceExample {
  options: FormGroup;
  hideRequiredControl = new FormControl(false);
  floatLabelControl = new FormControl('auto');
};