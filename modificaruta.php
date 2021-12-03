<?php
include ("conexion.php");
$ruta=$_REQUEST['ruta'];
$sql="SELECT * FROM rutas where ruta=$ruta";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="estilo3.css">
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
		<a href="admi.html">volver</a>
	</header>
	<div class="login">
		<article class="fondo">
			<h3>modificar auto</h3>
	<?php
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	<form method="post" id="formulario" action="actualizaruta.php">
	<tr>
		<td></td>
			<td><input  class="inp" type="text" name="ruta"value='<?php echo
			$row['ruta'];?>'></td>
	</tr>
	<tr>
	<tr>
		<td>inicio</td>
		<td><input class="inp" type="text" name="inicio" value='<?php echo
	$row['inicio'];?>'></td>
	</tr>
	<tr>
	<td>final</td>
	<td><input class="inp" type="text" name="final" value='<?php echo
	$row['final'];?>'></td>
	</tr>
	<td></td>
	<td><input  class="boton" type="submit" value="Modificar"></td>
	</tr>
</table>
</form>
<?php
}
?>
</div>
</div>
</body>
</html>
