import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { FuncionarioComponent } from './funcionario/funcionario.component';
import { PecaComponent } from './peca/peca.component';
import { CarroComponent } from './carro/carro.component';
import { ServicoComponent} from './servico/servico.component';
import { LojaComponent } from './loja/loja.component';
import { ClienteComponent } from './cliente/cliente.component';
import { HomeComponent } from './home/home.component';



const routes: Routes = [

  { path: '', redirectTo: '/home', pathMatch: 'full' },
  { path: 'home', component: HomeComponent },
  { path: 'funcionario', component: FuncionarioComponent },
  { path: 'peca', component: PecaComponent },
  { path: 'carro', component: CarroComponent },
  { path: 'servico', component: ServicoComponent},
  { path: 'loja', component: LojaComponent },
  { path: 'cliente', component: ClienteComponent },
];



@NgModule({ 
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule] 
  }) 
export class AppRoutingModule { }
