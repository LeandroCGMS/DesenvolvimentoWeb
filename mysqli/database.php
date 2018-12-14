<?php
    //Grava Registros
    function DBCreate($table, array $data){
        $table = DB_PREFIX.'_'.$table;
        $data = DBEscape($data);

        $fields = implode(', ', array_keys($data));
        $values = "'".implode("', '", $data)."'";

        $query = "INSERT INTO $table ( $fields ) VALUES ( $values ) ";
        return DBExecute($query);
    }
    // Executa Queries
    function DBExecute($query){
        $link = DBConnect();
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        DBClose($link);
        return $result;
    }

    