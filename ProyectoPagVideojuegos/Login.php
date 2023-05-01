<?php

include 'Conexion.php';

$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];

$consu = mysqli_query($connect, "SELECT * FROM registro WHERE correo = '$correo' && contrasenia = '$contrasenia'");

// Verificar si se encontró un registro con las credenciales proporcionadas
if (mysqli_num_rows($consu) == 1) {
  $usuario = mysqli_fetch_assoc($consu);
  // Iniciar una sesión y almacenar información de usuario
  session_start();
  $_SESSION['id'] = $usuario['id'];
  $_SESSION['nombre'] = $usuario['nombre'];
  $_SESSION['correo'] = $usuario['correo'];
  $_SESSION['rol'] = $usuario['rol'];
  mysqli_close($connect);
  // Redirigir al usuario a diferentes páginas según su rol
  if ($_SESSION['rol'] == 'admin') {
    header("location: TiendaA.html");
    exit();
  } else {
    header("location: Tienda.html");
    exit();
  }
} else {
  // Si las credenciales son incorrectas, redirigir al usuario a la página de inicio de sesión con un mensaje de error
  mysqli_close($connect);
  header("location: Login.php?mensaje=credenciales_incorrectas");
  exit();
}
