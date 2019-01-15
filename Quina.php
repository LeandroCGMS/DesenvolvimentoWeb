<?php
  class Quina {
    private $primosAteOitenta = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79);
    private $numGerado = 0;
    private $resultadoArray = array();

    public function __construct() {

        for($i = 0; $i < 5; $i++) {

        $this->resultadoArray[] = rand(1,80);

      }
      $this->gerarQuina();
      $this->imprimirResultado();
    }
    function gerarQuina() {

      $this->verificarRepetidos();
    }

      function verificarRepetidos($resultadoArray) {
        for($i = 0; $i < 5; $i++) {
          for($j = 0; $j < 5; $j++) {
            if($i == $j){
              continue;
            }
            if($this->resultadoArray[$i] == $this->resultadoArray[$j]) {
              $this->resultadoArray[$i] = rand(1,80);
              $this->verificarRepetidos();
            }
          }
        }

        for($i = 0; $i < 5; $i++) {
          for($j = 0; $j < 5; $j++) {
            if($this->resultadoArray[$i] == $this->primosAteOitenta[$j]) {
              $this->resultadoArray[$i] = rand(1,80);
              $this->verificarRepetidos();
            }
          }
        }
      }

      function imprimirResultado() {
        sort($this->resultadoArray);
        $i = 0;
        foreach($this->resultadoArray as $resultado){
            //for($i = 0; $i < count($this->resultadoArray); $i++) {
            $i++;
          if($i == 5) {
            echo "$resultado";

            break;
          }
          echo "$resultado, ";
        }

      }
  }

  ?>
