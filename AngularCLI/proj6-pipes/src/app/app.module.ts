import { BrowserModule } from '@angular/platform-browser';
import { NgModule, LOCALE_ID } from '@angular/core';
import { registerLocaleData } from '@angular/common';
import localePt from '@angular/common/locales/pt';
import { FormsModule, ReactiveFormsModule} from '@angular/forms'
registerLocaleData(localePt, 'pt');

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ExemplosPipesComponent } from './exemplos-pipes/exemplos-pipes.component';
import { CamelCasePipe } from './camel-case.pipe';
import { SettingsService } from './settings.service';
import { FiltroArrayPipe } from './filtro-array.pipe'

@NgModule({
  declarations: [
    AppComponent,
    ExemplosPipesComponent,
    CamelCasePipe,
    FiltroArrayPipe
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule
  ],
  providers: [
    /*
    {
      provide: LOCALE_ID,
      useValue: 'pt' 
    }
    */
   SettingsService,
   {
     provide: LOCALE_ID,
     deps: [SettingsService],
     useFactory: (settingsService) => settingsService.getLocale()
   }
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
