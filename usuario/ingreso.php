
<center>
		<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/estilos2.css">
	<link rel="stylesheet" href="../css/estilos3.css">
</head>
<body>
	<div class="contenedor">
	<header id="cabecera">
		<h1>AINABRA</h1>
	</header>
	<nav id="navegacion">
			<ul class="menu">
				<li><a href="../administrador/admi.html">PRINCIPAL</a></li>
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
						<li><a href="../report/listar.php">USUARIO</a></li>
						<li><a href="../report/listarhistorial.php">HISTORIAL</a></li>
							
					</ul>
				</li>
				<li>
					<a href="../db/cerrar.php">CERRAR SESION</a>
				</li>
			</ul>
		</nav>
</body>
</html>
<?php
require("../db/conexion.php");
$sql="SELECT * FROM accesos";
?>
<link rel="stylesheet" href="../css/estilo3.css">
<br>
	<table border="2">
		<thead>
			<td>id</td>
			<td>Usuario</td>
			<td>fecha</td>
			<td>hora</td>
			<td>tipo</td>
		</thead>
<?php
$result=$con->query($sql);
if($result->num_rows>0){
while ($row=$result->fetch_assoc()) {
?>

<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['nuser'];?></td>
<td><?php echo $row['fecha'];?></td>
<td><?php echo $row['hora'];?></td>
<td><?php echo $row['tipo'];?></td>
<?php
}
}
else{
echo "No existen datos en la tabla";
}
$con->close();
?>
</tr>
</div>
</table>	
</center>
