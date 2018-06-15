<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quina Zero Primo</title>
    <link rel="stylesheet" href="../css/meuestilo.css">
</head>
<body>
<div>
    
    <form method="post" action="pagina_quina.php">
      Escolha a quantidade de Quinas Zero Primo quer gerar de 1 a 10.
        <select name="opcao">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <input type="submit" value="Gerar Quina(s)" class="botao"/>
    </form>
        <?php
        require_once 'Quina.php';
        $qtd = isset($_POST["opcao"]) ? $_POST["opcao"] : 1;
        echo "<h3>";
        for($i = 0; $i < $qtd; $i++) {
          $quina = new Quina;
          $quina->gerarQuina();
          
        }
        echo "</h3>";
        echo "<br/><br/>";

        unset($_POST['']);
        $qtd = 0;


        ?>
        
        <br><br><br><a href="index.php" class="botao" style='text-align: center;'>Voltar</a>
</div>
    
</body>
</html>
