import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AlunoComponent } from './aluno/aluno.component';


const routes: Routes = [

  { path: '', redirectTo: '/aluno', pathMatch: 'full' },
  { path: 'aluno', component: AlunoComponent }

];



@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
