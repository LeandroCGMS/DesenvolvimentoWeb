import { CursosService } from './../../cursos/cursos.service';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CursosComponent } from './cursos.component';
import { DetalheComponent } from './detalhe/detalhe.component';

@NgModule({
  declarations: [
    CursosComponent,
    DetalheComponent
  ],
  exports: [
    CursosComponent
  ],
  imports: [
    CommonModule
  ],
  providers: [
    CursosService
  ]
})
export class CursosModule { }
