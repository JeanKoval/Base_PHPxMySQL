<?php
// definições de host, database, usuário e senha

function MySql_Connect(){
    $host = "localhost";
    $db   = "teste";
    $user = "root";
    $pass = "";

    $link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error());

    return $link;
}

function MySql_Close($link){
    mysqli_close($link) or die(mysqli_error());
}

function MySql_Execute($link, $query){

    $result = mysqli_query($link, $query) or die(mysqli_error());

    return $result;
}

function MySql_Read($query){
    $result = MySql_Execute($query);

    if(!mysqli_num_rows($result)){
        return false;
    }else{
        while ($res = mysqli_fetch_assoc($result)){
            $datas[] = $res;
        }
        return $datas;
    }
}
