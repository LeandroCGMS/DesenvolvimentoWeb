<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP com MySQLI para Iniciantes</title>
</head>
<body>
    <?php
        require('config.php');
        require('connection.php');
        require('database.php');

        /*$link = DBConnect();

        DBClose($link);*/
        $nome = "'Lucas 'Pires";
        $dados = [
            'nome' => "Lucas '''Pi''res",
            'idade' => 18
        ];
        /*$nome = DBEscape($nome);
        $dados = DBEscape($dados);
        echo $nome,"<br>";
        var_dump($dados) ;*/

        $query =  "INSERT INTO clientes ( nome, email, idade, `status` ) VALUES ( 'Lucas Pires', 'leandrocgms2015@gmail.com', 18, 123 );";
        var_dump(DBExecute($query));
    ?>
</body>
</html>