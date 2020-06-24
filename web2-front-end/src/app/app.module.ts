import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MenuComponent } from './menu/menu.component';
import { LayoutModule } from '@angular/cdk/layout';
import { MatToolbarModule } from '@angular/material/toolbar';
import { MatButtonModule } from '@angular/material/button';
import { MatSidenavModule } from '@angular/material/sidenav';
import { MatIconModule } from '@angular/material/icon';
import { MatListModule } from '@angular/material/list';
import { MatGridListModule } from '@angular/material/grid-list';
import { MatCardModule } from '@angular/material/card';
import { MatMenuModule } from '@angular/material/menu';
import { FuncionarioComponent } from './funcionario/funcionario.component';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import {TableModule} from 'primeng/table';
import {InputTextModule} from 'primeng/inputtext';
import {FieldsetModule} from 'primeng/fieldset';
import {ButtonModule} from 'primeng/button';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { PecaComponent } from './peca/peca.component';
import { CarroComponent } from './carro/carro.component';
import { LojaComponent } from './loja/loja.component';
import { ClienteComponent } from './cliente/cliente.component';
import { ServicoComponent } from './servico/servico.component';
import { HomeComponent } from './home/home.component';
import {CarouselModule} from 'primeng/carousel';
import { Injectable } from '@angular/core';
import { Message } from 'primeng/api';



@NgModule({
  declarations: [
    AppComponent,
    MenuComponent,
    FuncionarioComponent,
    PecaComponent,
    CarroComponent,
    LojaComponent,
    ClienteComponent,
    ServicoComponent,
    HomeComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    LayoutModule,
    MatToolbarModule,
    MatButtonModule,
    MatSidenavModule,
    MatIconModule,
    MatListModule,
    MatGridListModule,
    MatCardModule,
    MatMenuModule,
    HttpClientModule,  
    TableModule,
    InputTextModule,
    FieldsetModule,
    ButtonModule,
    FormsModule,
    ReactiveFormsModule,
    CarouselModule,
  ],
  
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
