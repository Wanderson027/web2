import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { FuncionarioFormRoutingModule } from './funcionario-form-routing.module';
import { FuncionarioFormComponent } from './funcionario-form.component';
import { ReactiveFormsModule } from '@angular/forms';


@NgModule({
  declarations: [FuncionarioFormComponent],
  imports: [
    CommonModule,
    FuncionarioFormRoutingModule,
    ReactiveFormsModule

  ]
})
export class FuncionarioFormModule { }
