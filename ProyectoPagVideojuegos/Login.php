<?php

include 'Conexion.php';

$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];

$consu = mysqli_query($connect, "SELECT * FROM registro WHERE correo = '$correo' && password = '$contrasenia'");

$fila = mysqli_num_rows($consu);

if($consu){
    session_start();
    $_SESSION['correo'] = $correo;
    header("location: Tienda.html");
}else{
    header("location: Login.html");
}

mysqli_close($connect);

?>