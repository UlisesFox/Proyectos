<!DOCTYPE html>
<html lang="es" style="background-color: rgb(35, 0, 83); color: orange;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="superior.css">
	<link rel="stylesheet" href="BarraDesplegable.css">
	<link rel="icon" href="./Imagenes/Logo.png" type="image/x-con">
    <title>Buscar</title>
</head>
<body>

	<header>
        <div class="pagina">
            <img src="Imagenes/Logo.png" alt="Imagen logo">
            <h1 class="">Fox's Den</h1>
            <input type="checkbox" id="menubarra">
            <label class="icon-menu" for="menubarra"></label>
            <nav class="barra">
                <a href="Mostrar.php">Mostra datos</a>
                <a href="RegistroProducto.html">Registro</a>
                <a href="#">Buscar</a>
                <a href="#">Modificar</a>
                <a href="#">Eliminar</a>
            </nav>
        </div>
    </header>

<seccion>
    <form action="buscar.php" method="POST" class="form" style="margin-bottom: 20px;">
		<h2 style="margin-bottom: 10px; font-size: 40px;">Usuarios</h2>
        <label for = "nombre">Nombre del Usuario:</label>
            <input type="text" name = "nombre" id = "nombre" style="background-color: rgb(35, 0, 115); color: orange;"/>
            <button type="submit" name = "buscar" id = "buscar" style="background-color: rgb(35, 0, 115); color: orange; cursor: pointer;">Buscar</button>
    </form>

    <?php
    $nombre = $_POST['nombre'];
    include ('Conexion.php');
    
    $consulta = "SELECT * FROM registro where nombre = '$nombre'";
    $resultado = mysqli_query($connect,$consulta);

    $filas = mysqli_num_rows($resultado);
    $mostrar = mysqli_fetch_array($resultado);
    if($filas){
    ?>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Correo</td>
				<td>Telefono</td>
				<td>Contraseña</td>
				<td>Tipo</td>
			</tr>
            <tr>
                <td><?php echo $mostrar['id']?></td>
                <td><?php echo $mostrar['nombre']?></td>
                <td><?php echo $mostrar['correo']?></td>
                <td><?php echo $mostrar['telefono']?></td>
                <td><?php echo $mostrar['contrasenia']?></td>
				<td><?php echo $mostrar['Tipo']?></td>
            </tr>
        </table>
        <?php
    }else{
        ?>
        <h2 class = "bad">Usuario no encontrado</h2>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($connect);
?>
</seccion>

<form action="buscar.php" method="POST" class="form" style="margin-bottom: 20px;">
		<h2 style="margin-top: 10px; margin-bottom: 10px; font-size: 40px;">Productos</h2>
        <label for = "nombre">Nombre del Producto:</label>
            <input type="text" name = "nombrep" id = "nombrep" style="background-color: rgb(35, 0, 115); color: orange;"/>
            <button type="submit" name = "buscarp" id = "buscarp" style="background-color: rgb(35, 0, 115); color: orange; cursor: pointer;">Buscar</button>
    </form>

    <?php
    $nombrep = $_POST['nombrep'];
    include ('Conexion.php');
    
    $consulta = "SELECT * FROM producto where nombre = '$nombrep'";
    $resultado = mysqli_query($connect,$consulta);

    $filas = mysqli_num_rows($resultado);
    $mostrar = mysqli_fetch_array($resultado);
    if($filas){
    ?>
		<table border="1">
			<tr>
				<td>Nombre</td>
				<td>ID</td>
				<td>Precio</td>
				<td>Fecha</td>
				<td>Descripccion</td>
				<td>Estado</td>
				<td>Imagen</td>
			</tr>
            <tr>
                <td><?php echo $mostrar['nombre']?></td>
                <td><?php echo $mostrar['id']?></td>
                <td><?php echo $mostrar['precio']?></td>
                <td><?php echo $mostrar['fecha']?></td>
                <td><?php echo $mostrar['descripccion']?></td>
				<td><?php echo $mostrar['estado']?></td>
				<td></td>
            </tr>
        </table>
        <?php
    }else{
        ?>
        <h2 class = "bad">Producto no encontrado</h2>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($connect);
?>
</body>
</html>