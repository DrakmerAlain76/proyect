<?php
include ("conexion.php");
$cod_auto=$_REQUEST['cod_auto'];
$sql="SELECT * FROM auto where cod_auto=$cod_auto";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
	<link rel="stylesheet" href="estilos4.css">
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
	<form method="post" id="formulario" action="actulizarauto.php">
	<tr>
		<td>ci</td>
			<td><input class="inp" type="text" name="cod_auto"value='<?php echo
			$row['cod_auto'];?>'></td>
	</tr>
	<tr>
	<tr>
	<td>placa</td>
	<td><input type="text" class="inp" name="placa" value='<?php echo
	$row['placa'];?>'></td>
	</tr>
	<tr>
	<td>color</td>
	<td><input type="text"  class="inp" name="color" value='<?php echo
	$row['color'];?>'></td>
	</tr>
	<tr>
	<td>tipo</td>
	<td><input type="text" class="inp" name="tipo" value='<?php echo
	$row['tipo'];?>'></td>
	</tr>
	<tr>
	<td></td>
	<td><input class="boton" type="submit" value="Modificar"></td>
	</tr>
</table>
</form>
<?php
}
?>
		</article>
		
	
	</div>	
	</div>
</body>
</html>
