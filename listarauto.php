<center>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="estilo2.css">
	<link rel="stylesheet" href="estilos2.css">
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
		<h1>bienvenido administrador</h1>
	</header>
		<nav id=navegacion>
			<ul class="menu">
				<li><a href="admi.html">inicio</a></li>
				<li><a href="">Agregar</a>
					<ul class="submenu">
						<li><a href="agregare.html">usuarios</a></li>
						<li><a href="ruta.html">ruta</a></li>
						<li><a href="linea.html">linea</a></li>
						<li><a href="movilidad.html">movilidad</a></li>
						<li><a href="control.html">controlar</a></li>
						
					</ul>
				</li>
				<li><a href="">ver tabla</a>
					<ul class="submenu">
						<li><a href="tabla.php">usuarios</a></li>
						<li><a href="accion.php">ingreso</a></li>
						<li><a href="tablaruta.php">ruta</a></li>
						<li><a href="tablamovi.php">autos</a></li>
						<li><a href="tablaco.php">control</a></li>
						
					</ul>
				</li>	
				<li><a href="">buscar</a>
					<ul class="submenu">
						<li><a href="listar.php">usuario</a></li>
						<li><a href="listarutas.php">Recorrido</a></li>
						<li><a href="listarauto.php">propietario</a></li>
						<li><a href="listarco.php">control</a></li>
							
					</ul>
				</li>
				<li>
					<a href="cerrar.php">cerrar sesion</a>
				</li>
			</ul>
		</nav>
</body>
</html>
<link rel="stylesheet" href="css/bootstrap.css">
<form method="POST" action="listarauto.php">
<input type="text" name="bus" placeholder="Buscar" required>
<select name="col">
	<option value="cod">Codigo</option>
	<option value="nombre">Placa</option>
	<option value="tipo">Tipo</option>
</select>
<input type="Submit" name="btn" value="Buscar">
</form>
<?php
include "conexion.php";
if(isset($_POST["btn"]))
{
	$busca=$_POST["bus"];//Texto a buscar
	$columna=$_POST["col"]; //Opcion a Buscar
	$sql="select * from auto WHERE $columna LIKE '%$busca%'";
}
else
{
	$sql="select * from auto";
}
$result=$con->query($sql);
if($result->num_rows>0)
{
?>
<link rel="stylesheet" href="estilo3.css">
<br>
<table border="2">
	<thead>
		<th>cod</th>
		<th>placa</th>
		<th>color</th>
		<th>tipo</th>
	</thead>
	<tbody>
<?php
while($row=$result->fetch_array())
{
?>
	<tr>
		<td><?php echo $row[0]; ?></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
	</tr>
<?php
}
}
else
{
	echo "<br>No Existe en base de datos...";
}
?>
	</tbody>
</table>
<form method="POST" action="reporteauto.php">
<?php
	if(isset($_POST["btn"]))
	{
?>
	<input type="text" name="bus2" value="<?php echo $busca; ?>" hidden>
	<input type="text" name="col2" value="<?php echo $columna; ?>" hidden>
<?php
	}
?>
	<br>
<input type="submit" name="btn_imp" value="Imprimir">
</form>
<a href="listarauto.php">Recargar</a>
</div>
</center>