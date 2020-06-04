import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { PecaComponent } from './peca.component';

const routes: Routes = [{ path: '', component: PecaComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class PecaRoutingModule { }
