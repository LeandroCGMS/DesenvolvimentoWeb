import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-data-binding',
  templateUrl: './data-binding.component.html',
  styleUrls: ['./data-binding.component.css']
})
export class DataBindingComponent implements OnInit {
  url = 'http://loiane.com';
  cursoAngular = true;
  urlImagem = 'https://picsum.photos/200/300/?random';
  getValor() {
    return 1;
  }
  getCurtirCurso() {
    return true;
  }
  constructor() { }

  ngOnInit() {
  }

}
