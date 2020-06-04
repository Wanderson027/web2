import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {TableModule} from 'primeng/table';
import {InputTextModule} from 'primeng/inputtext';
import {FieldsetModule} from 'primeng/fieldset';
import {ButtonModule} from 'primeng/button';

import { FuncionarioRoutingModule } from './funcionario-routing.module';
import { FuncionarioComponent } from './funcionario.component';


@NgModule({
  declarations: [FuncionarioComponent],
  imports: [
    CommonModule,
    FuncionarioRoutingModule,
    TableModule,
    InputTextModule,
    FieldsetModule,
    ButtonModule
  ]
})
export class FuncionarioModule { }
