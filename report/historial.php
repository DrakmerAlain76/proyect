<?php 

$conexion=mysqli_connect('localhost','root','','proyecto');

?>
<center>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="estilo2.css">
<link rel="stylesheet" href="estilos5.css">
</head>
<body>
<div class="contenedor">
<header id="cabecera">
	<h1>AINABRA</h1>
</header>
	<nav id=navegacion>
	<nav id="navegacion">
			<ul class="menu">
				<li><a href="admi.html">PRINCIPAL</a></li>
				<li><a href="">AGREGAR</a>
					<ul class="submenu">
						<li><a href="agregare.html">USUARIO</a></li>
						<li><a href="paciente.html">PACIENTE</a></li>
						<li><a href="reserva.html">RESERVA</a></li>
						<li><a href="pago.html">PAGO</a></li>
						<li><a href="medicamento.html">MEDICAMENTO</a></li>
					</ul>
				</li>
				<li><a href="">VER TABLA</a>
					<ul class="submenu">
						<li><a href="tabla.php">USUARIOS</a></li>
						<li><a href="accion.php">INGRESO</a></li>
						<li><a href="tablapa.php">PACIENTE</a></li>
						<li><a href="reserva.php">RESERVA</a></li>
						<li><a href="tablapago.php">PAGO</a></li>
						<li><a href="medicamento.php">MEDICAMENTO</a></li>
						
					</ul>
				</li>
				<li><a href="">BUSCAR</a>
					<ul class="submenu">
						<li><a href="listar.php">USUARIO</a></li>
						<li><a href="listarhistorial.php">HISTORIAL</a></li>
							
					</ul>
				</li>
				<li>
					<a href="cerrar.php">CERRAR SESION</a>
				</li>
			</ul>
	</nav>

<br>
<link rel="stylesheet" href="estilo3.css">
<table border="2">
	<thead>
		<td>CI</td>
		<td>NOMBRE</td>
		<td>APELLIDO</td>
		<td>TRATAMIENTO</td>
		<td>COSTO TOTAL</td>
		<td>HORA</td>	
		<td>fecha</td>
	</thead>

	<?php 
	$sql="SELECT * from paciente,pago";
	$result=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($result)){
	 ?>
	<tr>
		<td><?php echo $mostrar['ci'] ?></td>
		<td><?php echo $mostrar['nombre'] ?></td>
		<td><?php echo $mostrar['apellido'] ?></td>
		<td><?php echo $mostrar['tratamiento'] ?></td>
		<td><?php echo $mostrar['costo_total'] ?></td>
		<td><?php echo $mostrar['hora'] ?></td>
		<td><?php echo $mostrar['fecha'] ?></td>
	</tr>
<?php 
}
 ?>
</table>

</body>
</html>
</center>