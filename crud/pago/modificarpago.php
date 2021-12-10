<?php 
include ("../../bd/conexion.php"); 
$cod_pago=$_REQUEST['cod_pago'];
$sql="SELECT * FROM pago where cod_pago=$cod_pago";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
	<link rel="stylesheet" href="../../css/estilos4.css">
    <link rel="stylesheet" href="../../css/fonts.css">
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
		<!-- corregido admi.html -->
		<a href="../administrador/admi.html">volver</a>
	</header>
	<div class="login">
		<article class="fondo">
			<h3>MODIFICAR PAGO</h3>
	<?php
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	
	<form method="post" id="formulario" action="../crud/pago/actulizarpago.php">
	<tr>
			<td><input class="inp" type="hidden" name="cod_pago"value='<?php echo
			$row['cod_pago'];?>'></td>
	</tr>
	<tr>
	<tr>
	<td>TRATAMIENTO/OPERACION</td>
	<td><input type="text" class="inp" name="tratamiento" value='<?php echo
	$row['tratamiento'];?>'></td>
	</tr>
	<td>DESCRIPCION</td>
	<td><input type="text" class="inp" name="descripcion" value='<?php echo
	$row['descripcion'];?>'></td>
	</tr>
	<tr>
	<td>COSTO</td>
	<td><input type="text"  class="inp" name="costo" value='<?php echo
	$row['costo'];?>'></td>
	</tr>
	<tr>
	<td>COSTO TOTAL</td>
	<td><input type="text" class="inp" name="costo_total" value='<?php echo
	$row['costo_total'];?>'></td>
	</tr>
	<tr>
	<td>HORA</td>
	<td><input type="text" class="inp" name="hora" value='<?php echo
	$row['hora'];?>'></td>
	</tr>
	<tr>
	<td>FECHA</td>
	<td><input type="text" class="inp" name="fecha" value='<?php echo
	$row['fecha'];?>'></td>
	</tr>
	<tr>
	<td><input type="hidden" class="inp" name="ci_pago" value='<?php echo
	$row['ci_pago'];?>'></td>
	</tr>
	<tr>
	<td></td>
	<td><input class="boton" type="submit" value="MODIFICAR"></td>
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
