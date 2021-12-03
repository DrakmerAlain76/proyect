
<?php
include ("conexion.php");
$id=$_REQUEST['id'];
$sql="SELECT * FROM sesion where id='$id'";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
	<link rel="stylesheet" href="estilos5.css">
	<link rel="stylesheet" href="fonts.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
	<style type="text/css">
		input::placeholder
		{
				color: #fff;
		}
	</style>
</head>

<body>
	<div class="contenedor">
	<header id="cabecera">
		<h1><a href="admi.html">VOLVER</a></h1>
	</header>
	<div class="login">
		<article class="fondo">
			<h3>Modificar</h3>

	<?php
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	<form method="post" id="formulario" action="actualizar.php">
	<tr>
		<td></td>
			<td><input type="hidden" class="inp" name="id"value='<?php echo
			$row['id'];?>'></td>
	</tr>
	<tr>
	<td>usuario</td>
		<td><input class="inp" 	type="text" name="usuario"
			value='<?php echo
			$row['usuario'];?>'></td>
	</tr>
	<tr>
		<td>contraseña</td>
		<td><input class="inp" type="contraseña" class="inp" name="contrase" value='<?php echo
	$row['contrase'];?>'></td>
	</tr>
	<tr>
	<td>nombre</td>
	<td><input type="text" class="inp" name="nombre" value='<?php echo
	$row['nombre'];?>'></td>
	</tr>
	<tr>
	<td>apellidos</td>
	<td><input class="inp" type="text" name="apellidos" value='<?php echo
	$row['apellidos'];?>'></td>
	</tr>
	<tr>
	<td>email</td>
	<td><input class="inp" type="email" name="email" value='<?php echo
	$row['email'];?>'></td>
	</tr>
	<tr>
	<td></td>
	<td><input class="boton" type="submit" value="Guargar"></td>
	</tr>
</form>
</article>
	</div>
<?php
}
?>
</div>
</body>
</html>
