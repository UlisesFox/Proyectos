<?php

include 'Conexion.php';

$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];

$consu = mysqli_query($connect, "SELECT * FROM registro WHERE correo = '$correo' && password = '$contrasenia'");

$fila = mysqli_num_rows($consu);

if($fila == mysqli_fetch_array($consu)){
    session_start();
    $_SESSION['correo'] = $correo;
    header("location: PaginaPrincipal.html");
}else{
    header("location: Login.html");
}

mysqli_close($connect);

?>