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

        $link = DBConnect();

        DBClose($link);
    ?>
</body>
</html>