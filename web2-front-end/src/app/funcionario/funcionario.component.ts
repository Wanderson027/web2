import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {FormBuilder, FormControl, FormGroup} from '@angular/forms';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { Funcionario } from './funcionario.models';

@Component({
  selector: 'app-funcionario',
  templateUrl: './funcionario.component.html',
  styleUrls: ['./funcionario.component.css']
})
export class FuncionarioComponent implements OnInit {

  private API_URL = 'http://127.0.0.1:8000/api/funcionarios';
  public Funcionarios;
  public form: FormGroup;

  constructor(
    private http: HttpClient,
    private formBuilder:FormBuilder 
  ) { 

  }

  ngOnInit(): void {
    this.setForm();
    this.listarFuncionarios();
  }

public delete(funcionario: Funcionario){
  this.http.delete(this.API_URL+'/'+funcionario.id).subscribe(
    resultado => {
      alert('Excluido com sucesso')
      this.listarFuncionarios();
    }, erro =>{
      alert('erro ao excluir')
    })
};

  private setForm() {
    const group = {
      id: [null],
      nome: [null],
      cpf: [null],
      funcao: [null]
    };

    this.form = this.formBuilder.group(group);
  }

  public salvar(){
    console.log(this.form.getRawValue())
    this.http.post(this.API_URL, this.form.value).subscribe(
      res => {
        alert("Adicionado com sucesso")
        this.listarFuncionarios();
        this.form.reset();
      }, erro =>{
        alert("erro ao adicionar")
      }
    )
  }

  public update(){
    const funcionario = this.form.getRawValue();
    this.http.put(this.API_URL+'/'+funcionario.id, funcionario).subscribe(
      res => {
        alert("Atualizado com sucesso")
        this.listarFuncionarios();
      }, erro =>{
        alert("erro ao Atualizar")
      }
    )
  }

  public listarFuncionarios(){
    this.http.get(this.API_URL).subscribe(
      res=>{
        this.Funcionarios = res;
      }
    )
  }

  public editar(funcionario: Funcionario){
    const controls = this.form.controls;
    controls.id.setValue(funcionario.id);
    controls.nome.setValue(funcionario.nome);
    controls.cpf.setValue(funcionario.cpf);
    controls.funcao.setValue(funcionario.funcao);
  }

}


export class FormFieldAppearanceExample {
  options: FormGroup;
  hideRequiredControl = new FormControl(false);
  floatLabelControl = new FormControl('auto');
};
