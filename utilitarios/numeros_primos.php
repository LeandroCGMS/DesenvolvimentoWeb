<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gere Números Primos Até O Número Desejado</title>
    <link rel="stylesheet" href="../css/meuestilo.css">
</head>
<body>
<div>
    <form method="post" action="numeros_primos.php">
        Gerar números primos de 2 até: <input type="number" name="num" min="2"/>
        <input type="submit" class="botao" value="Gerar"/>
    </form>
    <?php
    $num = isset($_POST["num"]) ? $_POST["num"] : 0;
    $stringResultado = "";
    if($num > 1000){
        $num = 1000;
    }
    echo "<span>{ ";
    for ($i = 1; $i <= $num; $i++) {
        $contDivisiveis = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $contDivisiveis++;
            }

            if ($j == $i) {

                if($contDivisiveis == 2 && $j == $num-1) {
                    //echo "$j";
                    $stringResultado = $stringResultado."$j";
                    break;
                }

                if ($contDivisiveis == 2) {


                    //echo "$j, ";
                    $stringResultado = $stringResultado."$j, ";
                }

            }
        }

    }

    $tam = strlen($stringResultado);
    $letrafinal = substr($stringResultado, -1);
    $vetor = str_split($stringResultado);
    if($vetor[$tam-1] == ' '){
        $vetor[$tam-1] = '';
        $vetor[$tam-2] = '';
    }
    for($i = 0; $i < $tam; $i++){
        echo $vetor[$i];
    }

    //echo $stringResultado;


    echo " }</span>";
    ?>
    <br><br><br><a href="index.php" class="botao">Voltar</a>
</div>
</body>
</html>