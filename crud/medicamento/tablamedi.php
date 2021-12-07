<center>
<?php
require("../../bd/conexion.php");
$sql="SELECT * FROM medicamento";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../../estilos2.css">
	<link rel="stylesheet" href="../../estilos5.css">
</head>
<body>
	<header id="cabecera">
		<h1>AINABRA</h1>
	</header>
	<div class="contenedor">
	<nav id="navegacion">
			<ul class="menu">
				<!-- revisar admi.html-->
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
						<!-- revisar  -->
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
						<!-- revisar  -->
						<li><a href="listar.php">USUARIO</a></li>
						<li><a href="listarhistorial.php">HISTORIAL</a></li>
							
					</ul>
				</li>
				<li>
					<a href="cerrar.php">CERRAR SESION</a>
				</li>
			</ul>
		</nav>
</body>
</html>
<!-- revisar estilo  -->
<link rel="stylesheet" href="estilo3.css">
	<table border="2">
		<thead>
			<td>COD</td>
			<td>NOMBRE</td>
			<td>HORA</td>
			<td>FECHA</td>
			<td>CI</td>
			<td>Eliminar</td>
			<td>Actualizar</td>
		</thead>>

<?php
$result=$con->query($sql);
if($result->num_rows>0){
while ($row=$result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['cod_medi'];?></td>
<td><?php echo $row['nombre'];?></td>
<td><?php echo $row['h'];?></td>
<td><?php echo $row['f'];?></td>
<td><?php echo $row['medi_ci'];?></td>
<th><a href="eliminarmedi.php? cod_medi=<?php echo
// ? revisar imagenes
$row['cod_medi'];?>"><img src="imagenes/basura.jpg" width="30" height="24" ></a></td>
<th><a href="modificarmedi.php? cod_medi=<?php echo
$row['cod_medi'];?>"><img src="imagenes/actualizar.png"width="30" height="24" ></a></td>
<?php
}
}
else{
echo "No existen datos en la tabla";
}
$con->close();
?>
</table>
</div>	
</center>
