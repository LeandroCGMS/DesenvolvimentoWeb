<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sequência de Fibonacci</title>
    <link rel="stylesheet" type="text/css" href="css/aulas.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/meuestilo.css">
</head>
<body class="bg-secondary">
<div class="container" id="div_principal">
    <form method="post" action="fibonacci.php">
        <h3>Gerar Sequência de Fibonacci até o termo: </h3><input class="form-control" type="number" name="num" min="1" value="1"/>
        <input type="submit" class="btn btn-primary" value="Gerar"/>
    </form>
    <?php
    $num = isset($_POST["num"]) ? $_POST["num"] : 1;
    $resultado = array();
    if($num > 1000){
        $num = 1000;
    }
    $numAtual = 1;
    $numAnterior = 0;
    for($i = 1; $i <= $num; $i++) {
      $resultado[] = $numAtual;
      $numAtual += $numAnterior;
      $numAnterior = $numAtual-$numAnterior;
    }
    $stringResultado = "";
    for($i = 0; $i < count($resultado); $i++) {
      if($i == count($resultado) - 1) {
        $stringResultado = $stringResultado.$resultado[$i];
        break;
      }
      $stringResultado = $stringResultado.$resultado[$i].", ";
    }
    echo "<div class='resultado'><h1>{ $stringResultado }</h1></div>";
    ?>
    <br><br><br><a href="index.php" class="btn btn-success">Voltar</a>
</div>
</body>
</html>
