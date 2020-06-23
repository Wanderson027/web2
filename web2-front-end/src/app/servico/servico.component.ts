import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {FormBuilder, FormControl, FormGroup} from '@angular/forms';
import { Servico } from './servico.models';

@Component({
  selector: 'app-servico',
  templateUrl: './servico.component.html',
  styleUrls: ['./servico.component.css']
})
export class ServicoComponent implements OnInit {

  private API_URL = 'http://127.0.0.1:8000/api/servicos';
  public Servicos;
  public form: FormGroup;

  constructor(
    private http: HttpClient,
    private formBuilder:FormBuilder 
  ) { 

  }

  ngOnInit(): void {
    this.setForm();
    this.listarServicos();
  }

public delete(servico: Servico){
  this.http.delete(this.API_URL+'/'+servico.id).subscribe(
    resultado => {
      alert('Excluido com sucesso')
      this.listarServicos();
    }, erro =>{
      alert('erro ao excluir')
    })
};

  private setForm() {
    const group = {
      id: [null],
      tipo: [null],
      valor: [null],
      descricao: [null]
    };

    this.form = this.formBuilder.group(group);
  }

  public salvar(){
    console.log(this.form.getRawValue())
    this.http.post(this.API_URL, this.form.value).subscribe(
      res => {
        alert("Adicionado com sucesso")
        this.listarServicos();
        this.form.reset();
      }, erro =>{
        alert("erro ao adicionar")
      }
    )
  }

  public update(){
    const servico = this.form.getRawValue();
    this.http.put(this.API_URL+'/'+servico.id, servico).subscribe(
      res => {
        alert("Atualizado com sucesso")
        this.listarServicos();
      }, erro =>{
        alert("erro ao Atualizar")
      }
    )
  }

  public listarServicos(){
    this.http.get(this.API_URL).subscribe(
      res=>{
        this.Servicos = res;
      }
    )
  }

  public editar(servico: Servico){
    const controls = this.form.controls;
    controls.id.setValue(servico.id);
    controls.tipo.setValue(servico.tipo);
    controls.valor.setValue(servico.valor);
    controls.descricao.setValue(servico.descricao);
  }

}


export class FormFieldAppearanceExample {
  options: FormGroup;
  hideRequiredControl = new FormControl(false);
  floatLabelControl = new FormControl('auto');
};

