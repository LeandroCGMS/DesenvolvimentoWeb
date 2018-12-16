<?php

    // Ler Registros
    function DBRead($table, $params = null, $fields = '*') {
        $table = DB_PREFIX.'_'.$table;
        if($params == null)
            $query = "SELECT $fields FROM $table";
        else
            $query = "SELECT $fields FROM $table $params";
            echo $query."<br><br>";
        //$query = DBEscape($query);
        $result = DBExecute($query);
        //return $query;
        if(!mysqli_num_rows($result))
            return false;
        else
            while($res = mysqli_fetch_assoc($result)){
                $data[] = $res;
            }
        return $data;
    }


    // Grava Registros
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

    