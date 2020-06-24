import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  responsiveOptions;
  cars:  { titulo: string } [] = [
    {titulo: 'Audi'},
    {titulo: 'BMW'},
    {titulo: 'Fiat'},
    {titulo: 'Ford'},
    {titulo: 'Honda'},
    {titulo: 'Jaguar'},
    {titulo: 'Mercedes'},
    {titulo: 'Renault'},
    {titulo: 'Volvo'},
    {titulo: 'VW'}
  ];

  constructor() {
    this.responsiveOptions = [
      {
          breakpoint: '1024px',
          numVisible: 3,
          numScroll: 3
      },
      {
          breakpoint: '768px',
          numVisible: 2,
          numScroll: 2
      },
      {
          breakpoint: '560px',
          numVisible: 1,
          numScroll: 1
      }
  ];

   }
  

  ngOnInit(): void {
  }

}
