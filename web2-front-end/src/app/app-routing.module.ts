import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { FuncionarioComponent } from './funcionario/funcionario.component';


const routes: Routes = [

  { path: '', redirectTo: '/funcionario', pathMatch: 'full' },
  { path: 'funcionario', component: FuncionarioComponent }

];



@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
