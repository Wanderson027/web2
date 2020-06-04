import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { FuncionarioComponent } from './funcionario.component';

const routes: Routes = [
  { path: '', component: FuncionarioComponent },
  { path: 'funcionario-form', loadChildren: () => import('./funcionario-form/funcionario-form.module').then(m => m.FuncionarioFormModule) },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class FuncionarioRoutingModule { }
