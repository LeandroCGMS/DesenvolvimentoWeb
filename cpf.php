<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de CPF em PHP</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<link rel="stylesheet" href="css/cpf.css">
<script type="text/javascript" src="js/cpf.js"></script>
</head>
<body>
    <div class="form-group" id="tela">
    <form action="cpf.php" method="POST" class="form-group col-md-4">
        <input id="cpf" class="form-control cpf-mask" type="text" name="cpf" placeholder="CPF a Ser Verificado">
        <input type="submit" id="btnVerificar" class="btn btn-primary" value="Verificar">
        <br>
        <?php
            if(isset($_POST['cpf'])) {
                $cpf = preg_replace("/[^\d]/","",$_POST['cpf']); // String => 01054145148
                echo "Você digitou o CPF: ".$_POST['cpf'];
                $pos0 = substr($cpf, 0, -10);
                echo "<br>A posição 0 é: ".$pos0;
                $pos1 = substr($cpf, 1, -9);
                echo "<br>A posição 1 é: ".$pos1;
                $pos2 = substr($cpf, 2, -8);
                echo "<br>A posição 2 é: ".$pos2;
                $pos3 = substr($cpf, 3, -7);
                echo "<br>A posição 3 é: ".$pos3;
                $pos4 = substr($cpf, 4, -6);
                echo "<br>A posição 4 é: ".$pos4;
                $pos5 = substr($cpf, 5, -5);
                echo "<br>A posição 5 é: ".$pos5;
                $pos6 = substr($cpf, 6, -4);
                echo "<br>A posição 6 é: ".$pos6;
                $pos7 = substr($cpf, 7, -3);
                echo "<br>A posição 7 é: ".$pos7;
                $pos8 = substr($cpf, 8, -2);
                echo "<br>A posição 8 é: ".$pos8;
                $pos9 = substr($cpf, 9, -1);
                echo "<br>A posição 9 é: ".$pos9;
                $pos10 = substr($cpf, 10, 10);
                echo "<br>A posição 10 é: ".$pos10;
                // A VERIFICAÇÃO DO PRIMEIRO DÍGITO ABAIXO:
                $multiplicacao1 = $pos0 * 10 + $pos1 * 9 + $pos2 * 8 + $pos3 * 7 + 
                $pos4 * 6 + $pos5 * 5 + $pos6 * 4 + $pos7 * 3 + $pos8 * 2;
                echo "<br>O resultado da multiplicação é: ".$multiplicacao1.".";
                $multiplicacao2 = $multiplicacao1 * 10;
                $resto = $multiplicacao2 % 11;
                $digito1 = $resto;
                echo "<br>O resto da multiplicação 2 por 11 é: <b>".$resto."</b>.";
                // AGORA, A VERIFICAÇÃO DO SEGUNDO DÍGITO:
                $multiplicacao1 = $pos0 * 11 + $pos1 * 10 + $pos2 * 9 + $pos3 * 8 + 
                $pos4 * 7 + $pos5 * 6 + $pos6 * 5 + $pos7 * 4 + $pos8 * 3 + $pos9 * 2;
                echo "<br>O resultado da multiplicação, do segundo dígito é: ".$multiplicacao1.".";
                $multiplicacao2 = $multiplicacao1 * 10;
                $resto = $multiplicacao2 % 11;
                $digito2 = $resto;
                echo "<br>O resto da multiplicação 2 por 11, do Segundo Dígito é: <b>".$resto."</b>.";
                if($digito1 == $pos9 && $digito2 == $pos10){
                    echo "<h1 class='bg-info'>O CPF É VÁLIDO.</h1>";
                } else {
                    echo "<h1 class='bg-danger'>O CPF É INVÁLIDO.</h1>";
                }
                 
            }
        ?>
        </form>
        
    </div>
    
</body>
</html>