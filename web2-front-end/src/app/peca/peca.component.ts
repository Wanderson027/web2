import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {FormBuilder, FormControl, FormGroup} from '@angular/forms';
import { Peca } from './peca.models';
;

@Component({
  selector: 'app-peca',
  templateUrl: './peca.component.html',
  styleUrls: ['./peca.component.css']
})
export class PecaComponent implements OnInit {

  private API_URL = 'http://127.0.0.1:8000/api/pecas';
  public Pecas;
  public form: FormGroup;


  constructor(
    private http: HttpClient,
    private formBuilder:FormBuilder
  ) { 

  }

  ngOnInit(): void {
    this.setForm();
    this.listarPecas();
  }

public delete(peca: Peca){
  this.http.delete(this.API_URL+'/'+peca.id).subscribe(
    resultado => {
      alert('Excluido com sucesso')
      this.listarPecas();
    }, erro =>{
      alert('erro ao excluir')
    })
};

  private setForm() {
    const group = {
      id: [null],
      nome: [null],
      fabricante: [null],
      quantidade: [null]
    };

    this.form = this.formBuilder.group(group);
  }

  public salvar(){
    console.log(this.form.getRawValue())
    this.http.post(this.API_URL, this.form.value).subscribe(
      res => {
        alert("Adicionado com sucesso")
        this.listarPecas();
        this.form.reset();
      }, erro =>{
        alert("erro ao adicionar")
      }
    )
  }

  public update(){
    const peca = this.form.getRawValue();
    this.http.put(this.API_URL+'/'+peca.id, peca).subscribe(
      res => {
        alert("Atualizado com sucesso")
        this.listarPecas();
      }, erro =>{
        alert("erro ao Atualizar")
      }
    )
  }

  public listarPecas(){
    this.http.get(this.API_URL).subscribe(
      res=>{
        this.Pecas = res;
      }
    )
  }

  public editar(peca: Peca){
    const controls = this.form.controls;
    controls.id.setValue(peca.id);
    controls.nome.setValue(peca.nome);
    controls.fabricante.setValue(peca.fabricante);
    controls.quantidade.setValue(peca.quantidade);

}
}

export class FormFieldAppearanceExample {
  options: FormGroup;
  hideRequiredControl = new FormControl(false);
  floatLabelControl = new FormControl('auto');
};

