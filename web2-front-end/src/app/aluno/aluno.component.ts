import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {FormBuilder, FormControl, FormGroup} from '@angular/forms';

@Component({
  selector: 'app-aluno',
  templateUrl: './aluno.component.html',
  styleUrls: ['./aluno.component.css']
})
export class AlunoComponent implements OnInit {

  private API_URL = 'http://127.0.0.1:8000/api/alunos';
  public Vendedores;

  constructor(
    private http: HttpClient
  ) { 

  }

  ngOnInit(): void {
    this.listarAlunos();
  }


  private listarAlunos(){
    this.http.get(this.API_URL).subscribe(
      res=>{
        this.Vendedores = res;
        console.log(this.Vendedores);
       
      }
    )
  }
}
export class FormFieldAppearanceExample {
  options: FormGroup;
  hideRequiredControl = new FormControl(false);
  floatLabelControl = new FormControl('auto');
};