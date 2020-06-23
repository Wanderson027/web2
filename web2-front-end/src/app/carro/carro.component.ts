import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {FormBuilder, FormControl, FormGroup} from '@angular/forms';
import { Carro } from './carro.models'

@Component({
  selector: 'app-carro',
  templateUrl: './carro.component.html',
  styleUrls: ['./carro.component.css']
})
export class CarroComponent implements OnInit {

  private API_URL = 'http://127.0.0.1:8000/api/carros';
  public Carros;
  public form: FormGroup;

  constructor(
    private http: HttpClient,
    private formBuilder:FormBuilder 
  ) { 

  }

  ngOnInit(): void {
    this.setForm();
    this.listarCarros();
  }

public delete(carro: Carro){
  this.http.delete(this.API_URL+'/'+carro.id).subscribe(
    resultado => {
      alert('Excluido com sucesso')
      this.listarCarros();
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
        this.listarCarros();
        this.form.reset();
      }, erro =>{
        alert("erro ao adicionar")
      }
    )
  }

  public update(){
    const carro = this.form.getRawValue();
    this.http.put(this.API_URL+'/'+carro.id, carro).subscribe(
      res => {
        alert("Atualizado com sucesso")
        this.listarCarros();
      }, erro =>{
        alert("erro ao Atualizar")
      }
    )
  }

  public listarCarros(){
    this.http.get(this.API_URL).subscribe(
      res=>{
        this.Carros = res;
        console.log(res);
      }
    )
  }

  public editar(carro: Carro){
    const controls = this.form.controls;
    controls.id.setValue(carro.id);
    controls.nome.setValue(carro.nome);
    controls.marca.setValue(carro.marca);
    controls.cor.setValue(carro.cor);
  }

}


export class FormFieldAppearanceExample {
  options: FormGroup;
  hideRequiredControl = new FormControl(false);
  floatLabelControl = new FormControl('auto');
};

