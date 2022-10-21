<?php

$db_host="localhost";
$db_user="root";
$db_name="registro";
$db_password="";

$connect = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if(!$connect){
    die("Hay un error". mysqli_connect_error());
}else{
    echo "Se ha registrado con exito.";
}

?>