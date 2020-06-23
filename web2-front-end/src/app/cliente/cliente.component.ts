import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {FormBuilder, FormControl, FormGroup} from '@angular/forms';
import { Cliente } from './cliente.models';


@Component({
  selector: 'app-cliente',
  templateUrl: './cliente.component.html',
  styleUrls: ['./cliente.component.css']
})
export class ClienteComponent implements OnInit {

  private API_URL = 'http://127.0.0.1:8000/api/clientes';
  public Clientes;
  public form: FormGroup;

  constructor(
    private http: HttpClient,
    private formBuilder:FormBuilder 
  ) { 

  }

  ngOnInit(): void {
    this.setForm();
    this.listarClientes();
  }

public delete(cliente: Cliente){
  this.http.delete(this.API_URL+'/'+cliente.id).subscribe(
    resultado => {
      alert('Excluido com sucesso')
      this.listarClientes();
    }, erro =>{
      alert('erro ao excluir')
    })
};

  private setForm() {
    const group = {
      id: [null],
      nome: [null],
      telefone: [null],
      cpf: [null]
    };

    this.form = this.formBuilder.group(group);
  }

  public salvar(){
    console.log(this.form.getRawValue())
    this.http.post(this.API_URL, this.form.value).subscribe(
      res => {
        alert("Adicionado com sucesso")
        this.listarClientes();
        this.form.reset();
      }, erro =>{
        alert("erro ao adicionar")
      }
    )
  }

  public update(){
    const cliente = this.form.getRawValue();
    this.http.put(this.API_URL+'/'+cliente.id, cliente).subscribe(
      res => {
        alert("Atualizado com sucesso")
        this.listarClientes();
      }, erro =>{
        alert("erro ao Atualizar")
      }
    )
  }

  public listarClientes(){
    this.http.get(this.API_URL).subscribe(
      res=>{
        this.Clientes = res;
        console.log(res);
      }
    )
  }

  public editar(cliente: Cliente){
    const controls = this.form.controls;
    controls.id.setValue(cliente.id);
    controls.nome.setValue(cliente.nome);
    controls.telefone.setValue(cliente.telefone);
    controls.funcao.setValue(cliente.cpf);
  }

}


export class FormFieldAppearanceExample {
  options: FormGroup;
  hideRequiredControl = new FormControl(false);
  floatLabelControl = new FormControl('auto');
};