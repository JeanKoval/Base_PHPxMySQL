<?php

include "connection.php";

$link = MySql_Connect();

$query = "Select * from teste1";

$datas = MySql_Read($link, $query);

foreach($datas as $data){
    echo "cod: ". $data['cod']. " | Nome: ". $data['nome'] .'<br>';
    echo "--------------------------------------------<br>";
}

mysqli_close($link);
