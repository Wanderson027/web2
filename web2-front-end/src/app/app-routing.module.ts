import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { FuncionarioComponent } from './funcionario/funcionario.component';
import { PecaComponent } from './peca/peca.component';
import { CarroComponent } from './carro/carro.component';
import { LojaComponent } from './loja/loja.component';


const routes: Routes = [

  { path: '', redirectTo: '/funcionario', pathMatch: 'full' },
  { path: 'funcionario', component: FuncionarioComponent },
  { path: 'peca', component: PecaComponent },
  { path: 'carro', component: CarroComponent },
  { path: 'loja', component: LojaComponent }

];



@NgModule({
  imports: [RouterModule.forRoot(routes)],
exports: [RouterModule]
})
export class AppRoutingModule { }
