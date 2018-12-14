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
        /*
        $query =  "INSERT INTO clientes ( nome, email, idade, `status` ) 
        VALUES ( 'Leandro Santos', 'meuemail@gmail.com', 32, 123 );";
        if(DBExecute($query)){
            echo "<h1>Registro Inserido com Sucesso.";
        } else {
            echo "<h1>Falha ao Inserir registro.";
        }
        */
        /*
        $cliente = array(
            'nome' => 'Lucas Pires',
            'email' => 'contato@coderweb.com.br',
            'idade' => 18,
            'status' => 1
        );

        $grava = DBCreate('clientes', $cliente);
        
        if($grava) 
            echo 'OK';
        else
            echo ':/';
        */
        $clientes = DBRead('clientes', "WHERE status = 123", 'nome, email');
        var_dump($clientes);

    ?>
</body>
</html>