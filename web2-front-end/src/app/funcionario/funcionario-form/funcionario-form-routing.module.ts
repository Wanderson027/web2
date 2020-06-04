import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { FuncionarioFormComponent } from './funcionario-form.component';

const routes: Routes = [{ path: '', component: FuncionarioFormComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class FuncionarioFormRoutingModule { }
