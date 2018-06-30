<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quina Zero Primo</title>
    <link rel="stylesheet" href="../css/meuestilo.css">
    <link rel="stylesheet" type="text/css" href="css/aulas.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
</head>
<body>
<div>
    <pre>
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
        $quina = new Quina;

        $qtd = isset($_POST["opcao"]) ? $_POST["opcao"] : 1;

        for($i = 0; $i < $qtd; $i++) {
          $quina->gerarQuina();
          echo "<br>";
        }




        ?>
        <br><br><br><a href="index.php" class="botao" style='text-align: center;'>Voltar</a>
        </pre>
</div>
</body>
</html>
