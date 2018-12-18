<?php

    // Deleta Registros
    function DBDelete($table, $where = null) {
        $table = DB_PREFIX.'_'.$table;
        $where = ($where) ? "WHERE $where" : null;
        $query = "DELETE FROM $table $where";
        //var_dump($query);
        return DBExecute($query);
    }

    // Altera Registros
    function DBUpDate($table, array $data, $where = null, $insertId = false){
        foreach($data as $key => $value){
            $fields[] = "{$key} = '{$value}'";
        }
        $fields = implode(', ', $fields);
        //var_dump($fields);
        $table = DB_PREFIX.'_'.$table;
        $where = ($where) ? "WHERE $where" : null;
        $query = "update $table set $fields $where";
        return DBExecute($query, $insertId) ;
    }

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
    function DBCreate($table, array $data, $insertId = false){
        $table = DB_PREFIX.'_'.$table;
        $data = DBEscape($data);

        $fields = implode(', ', array_keys($data));
        $values = "'".implode("', '", $data)."'";

        $query = "INSERT INTO $table ( $fields ) VALUES ( $values ) ";
        return DBExecute($query, $insertId);
    }
    // Executa Queries
    function DBExecute($query, $insertId = false){
        $link = DBConnect();
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        if($insertId)
            $result = mysqli_insert_id($link);
        DBClose($link);
        return $result;
    }

    