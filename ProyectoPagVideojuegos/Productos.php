<?php

include 'Conexion.php';

$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$fecha = $_POST["fecha"];
$descripccion = $_POST["descripccion"];
$estado = $_POST["estado"];
$imagen = $_POST["imagen"];

$inser = "INSERT INTO producto (id, nombre, precio, fecha, descripccion, estado, imagen) values ('0', '$nombre', '$precio', '$fecha', '$descripccion', '$estado', '$imagen')";

$con = mysqli_query($connect, $inser);

if ($con){
    header('location: Admin.html');
}else{
    header('location: RegistroProducto.html');

}

mysqli_close($connect);

?>