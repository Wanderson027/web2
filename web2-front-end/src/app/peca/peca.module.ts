import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { PecaRoutingModule } from './peca-routing.module';
import { PecaComponent } from './peca.component';


@NgModule({
  declarations: [PecaComponent],
  imports: [
    CommonModule,
    PecaRoutingModule
  ]
})
export class PecaModule { }
