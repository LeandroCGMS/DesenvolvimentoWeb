<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quina Zero Primo e Comum</title>
    <link rel="stylesheet" href="../css/meuestilo.css">
</head>
<body>
<div>
    <pre>
    <form method="post" action="sorteio_quina_bolao_primo_zero.php">
        <select name="opcao">
            <option value="1">Gerar Jogo Quina Zero Primo</option>
            <option value="2">Gerar Jogo da Quina</option>
        </select>
        <input type="submit" value="Gerar Jogo escolhido" class="botao"/>
    </form>
        <?php
        $op = isset($_POST["opcao"]) ? $_POST["opcao"] : 0;
        $stringResultado = "";

        echo "<span><h1 style='text-align: center;'>{ ";

        if ($op == 1) {
            echo "<br>Quina Zero Primo <br>";
            quinaZeroPrimo();
        } elseif ($op == 2) {
            echo "<br>Quina Com Primos <br>";
            gerarQuina();
        }


        function quinaZeroPrimo()
        {
            $primosAteOitenta = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79);
            $stringResultado = "";
            $resultadoArray = array();
            for ($i = 0; $i < 5; $i++) {
                $numGerado = rand(1, 80);
                $dezenaValida = true;
                for ($j = 0; $j < count($primosAteOitenta); $j++) {
                    if ($numGerado == $primosAteOitenta[$j]) {
                        $dezenaValida = false;
                        break;

                    }
                }

                while (!$dezenaValida) {
                    $numGerado = rand(1, 80);
                    for ($j = 0; $j < count($primosAteOitenta); $j++) {
                        if ($numGerado != $primosAteOitenta[$j]) {
                            $dezenaValida = true;

                        } else {
                            $dezenaValida = false;
                            break;
                        }

                    }
                }

                //Aqui a dezena tem que ser válida, porque só sai do while caso o número randômico não conste em PRIMOS

                $resultadoArray[] = $numGerado;
                sort($resultadoArray);
                //print_r($resultadoArray);


            }

            verificarRepetido($resultadoArray);

            $resultado = verificarRepetido($resultadoArray);

            imprimirResultado($resultado);

        }


        function verificarRepetido($resultadoArray)
        {
            $primosAteOitenta = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79);

            for ($i = 0, $j = count($resultadoArray) - 1; $i < count($resultadoArray); $i++, $j--) {
                for($j = 0; $j < count($resultadoArray); $j++) {
                    if($i == $j){
                        continue;
                    }
                    if($resultadoArray[$i] == $resultadoArray[$j]){
                        $resultadoArray[$i] = rand(1,80);
                        verificarRepetido($resultadoArray);
                    }
                }
            } // SÓ SAI DAQUI, QUANDO NÃO HAVER MAIS REPETIDOS

            /*echo "depois do primeiro FOR de REPETIDOS";
            print_r($resultadoArray);*/

            for ($i = 0; $i < count($resultadoArray); $i++) {
                for ($j = 0; $j < count($primosAteOitenta); $j++) {
                    if ($resultadoArray[$i] == $primosAteOitenta[$j]) {
                        $resultadoArray[$i] = rand(1, 80);
                        verificarRepetido($resultadoArray);
                    }
                }
            } // SÓ SAI DAQUI, QUANDO NÃO HAVER NÚMEROS PRIMOS

            sort($resultadoArray);

            return $resultadoArray;



        }

        function imprimirResultado($resultadoArray) {

            for ($i = 0; $i < count($resultadoArray); $i++) { // FOR DA IMPRESSÃO DO ARRAY COM VÍRGULAS EM FORMATO CONJUNTO
                if ($i == count($resultadoArray) - 1) {
                    echo "$resultadoArray[$i]";
                    break;
                }
                echo "$resultadoArray[$i], ";
            }
        }

        echo " <br>}</h1></span>";

        function gerarQuina() {
            $resultadoArray = array();
            for($i = 0; $i < 5; $i++) {
                $numGerado = rand(1,80);
                $resultadoArray[$i] = $numGerado;
            }

            $resultado = verificarRepetidoQuinaPrima($resultadoArray);
            imprimirResultado($resultado);


        }

        function verificarRepetidoQuinaPrima($resultadoArray) {
            for ($i = 0, $j = count($resultadoArray) - 1; $i < count($resultadoArray); $i++, $j--) {
                for($j = 0; $j < count($resultadoArray); $j++) {
                    if($i == $j){
                        continue;
                    }
                    if($resultadoArray[$i] == $resultadoArray[$j]){
                        $resultadoArray[$i] = rand(1,80);
                        verificarRepetido($resultadoArray);
                    }
                }
                sort($resultadoArray);
                return $resultadoArray;
            } // SÓ SAI DAQUI, QUANDO NÃO HAVER MAIS REPETIDOS
        }

        ?>
        <br><br><br><a href="index.php" class="botao" style='text-align: center;'>Voltar</a>
        </pre>
</div>
</body>
</html>
