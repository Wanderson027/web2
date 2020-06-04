import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

const routes: Routes = [

  { path: '', redirectTo: '/funcionario', pathMatch: 'full' },
  { path: 'funcionario', loadChildren: () => import('./funcionario/funcionario.module').then(m => m.FuncionarioModule) },
];



@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
