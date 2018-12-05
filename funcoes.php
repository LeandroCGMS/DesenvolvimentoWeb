<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/aulas.css">
<title>Funções PHP</title>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<Script type="text/javascript" src="js/aula/index.js"></script>


<body>
  <div>
    <?php
      //$valorPassado = isset($_POST["valor"])?$_POST["valor"]:"Valor não passado pelo Ajax";
      imprimeTela();

      function imprimeTela() {
        echo "Dentro da função PHP chamada pelo Ajax do JQuery<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
        //echo "O valor passado pelo Ajax foi $valorPassado";
      }
    ?>
  </div>
</body>
</html>
