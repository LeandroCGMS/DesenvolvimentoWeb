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

  valorAtual = '';
  valorSalvo;
  isMouseOver = false;
  nome = 'abc';
  pessoa: any = {
    nome: 'def',
    idade: 20
  }
  getValor() {
    return 1;
  }
  getCurtirCurso() {
    return true;
  }

  botaoClicado() {
    alert('Botão clicado.');
  }

  onKeyUp(evento: KeyboardEvent) {
    this.valorAtual = (<HTMLInputElement>evento.target).value;
  }

  salvarValor(valor) {
    this.valorSalvo = valor;
  }
  onMouseOverOut() {
    this.isMouseOver = !this.isMouseOver;
  }
  constructor() { }

  ngOnInit() {
  }

}
