<?php

include 'Conexion.php';

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$contrasenia = $_POST["contrasenia"];

$inser = "INSERT INTO registro (id, nombre, correo, telefono, contrasenia) values ('0', '$nombre', '$correo', '$telefono', '$contrasenia')";

$con = mysqli_query($connect, $inser);

if ($con){
    echo "Conectado... ";
    header('location: Login.html');
}else{
    header('location: Registro.html');
    echo "Error... ";

}

mysqli_close($connect);

?>