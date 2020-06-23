import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {FormBuilder, FormControl, FormGroup} from '@angular/forms';
import { Loja } from './loja.models';

@Component({
  selector: 'app-loja',
  templateUrl: './loja.component.html',
  styleUrls: ['./loja.component.css']
})
export class LojaComponent implements OnInit {

  private API_URL = 'http://127.0.0.1:8000/api/lojas';
  public Lojas;
  public form: FormGroup;

  constructor(
    private http: HttpClient,
    private formBuilder:FormBuilder 
  ) { 

  }

  ngOnInit(): void {
    this.setForm();
    this.listarLojas();
  }

public delete(loja: Loja){
  this.http.delete(this.API_URL+'/'+loja.id).subscribe(
    resultado => {
      alert('Excluido com sucesso')
      this.listarLojas();
    }, erro =>{
      alert('erro ao excluir')
    })
};

  private setForm() {
    const group = {
      id: [null],
      nome: [null],
      endereco: [null],
      cnpj: [null]
    };

    this.form = this.formBuilder.group(group);
  }

  public salvar(){
    console.log(this.form.getRawValue())
    this.http.post(this.API_URL, this.form.value).subscribe(
      res => {
        alert("Adicionado com sucesso")
        this.listarLojas();
        this.form.reset();
      }, erro =>{
        alert("erro ao adicionar")
      }
    )
  }

  public update(){
    const loja = this.form.getRawValue();
    this.http.put(this.API_URL+'/'+loja.id, loja).subscribe(
      res => {
        alert("Atualizado com sucesso")
        this.listarLojas();
      }, erro =>{
        alert("erro ao Atualizar")
      }
    )
  }

  public listarLojas(){
    this.http.get(this.API_URL).subscribe(
      res=>{
        this.Lojas = res;
      }
    )
  }

  public editar(loja: Loja){
    const controls = this.form.controls;
    controls.id.setValue(loja.id);
    controls.nome.setValue(loja.nome);
    controls.endereco.setValue(loja.endereco);
    controls.cnpj.setValue(loja.cpnj);
  }

}


export class FormFieldAppearanceExample {
  options: FormGroup;
  hideRequiredControl = new FormControl(false);
  floatLabelControl = new FormControl('auto');
};
