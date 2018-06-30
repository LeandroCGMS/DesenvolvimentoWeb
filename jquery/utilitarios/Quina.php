<?php
  class Quina {
    var $primosAteOitenta = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79);
    var $numGerado = 0;
    var $resultadoArray = array();

    function gerarQuina() {
        echo "{ ";
      for($i = 0; $i < 5; $i++) {
        $numGerado = rand(1,80);
        $resultadoArray[] = $numGerado;       
        
      }

      echo "Antes de chamar verificarRepetidos();<br>";
      print_r($resultadoArray);
      
      verificarRepetidos();
    }
      

      function verificarRepetidos() {
        for($i = 0; $i < count($resultadoArray); $i++) {
          for($j = 0; $j < count($resultadoArray); $j++) {
            if($i == $j){
              continue;
            }

            if($resultadoArray[$i] == $resultadoArray[$j]) {
              $resultadoArray[$i] = rand(1,80);
              verificarRepetidos();
            }

          }

        }

        echo "Depois do for de repetidos estar concluído<br>";
        print_r($resultadoArray);

        for($i = 0; $i < count($resultadoArray); $i++) {
          for($j = 0; $j < count($primosAteOitenta); $j++) {
            if($resultadoArray[$i] == $primosAteOitenta[$j]) {
              $resultadoArray[$i] = rand(1,80);
              verificarRepetidos();
            }

            

          }
        }

        echo "Depois do for de Primos estar concluído<br>";
        print_r($resultadoArray);

        imprimirResultado();

      }

      

      function imprimirResultado() {
        sort($resultadoArray);

        for($i = 0; $i < count($resultadoArray); $i++) {
          if($i == count($resultadoArray) - 1) {
            echo "$resultadoArray[$i]";
            echo " }";
            print_r($resultadoArray);
            break;
          }
          echo "$resultadoArray[$i], ";
        }
      }

    
  }

 ?>
