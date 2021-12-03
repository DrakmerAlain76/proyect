<center>
<?php
require("conexion.php");
$sql="SELECT * FROM sesion";
?>
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
			<ul class="menu">
				<ul class="menu">
				<li><a href="admi.html">inicio</a></li>
				<li><a href="">Agregar</a>
					<ul class="submenu">
						<li><a href="agregare.html">Usuarios</a></li>
						<li><a href="paciente.html">Paciente</a></li>
						<li><a href="reserva.html">Reserva</a></li>
						<li><a href="pago.html">Pago</a></li>
						<li><a href="medicamento.html">Medicamento</a></li>
					</ul>
				</li>
				<li><a href="">ver tabla</a>
				<ul class="submenu">
						<li><a href="tabla.php">usuarios</a></li>
						<li><a href="accion.php">ingreso</a></li>
						<li><a href="tablapa.php">Paciente</a></li>
						<li><a href="reserva.php">Reserva</a></li>
						<li><a href="pago.php">Pago</a></li>
						<li><a href="medicamento.php">medicamento</a></li>
						
					</ul>
				</li>
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
<?php  
echo "Mostar Tabla"."<br>";
?>
<link rel="stylesheet" href="estilo3.css">
<table border="2">
	<thead>
		<td>id</td>
		<td>CI</td>
		<td>USUARIO</td>
		<td>CONTRASEÑA</td>
		<td>NOMBRE</td>
		<td>APELLIDO</td>
		<td>EMAIL</td>
		<td>TIPO</td>
		<td>ELIMINAR</td>
		<td>ACTUALIZAR</td>
	</thead>
	
<?php
$result=$con->query($sql);
if($result->num_rows>0){
while ($row=$result->fetch_assoc()) 
	{
?>
			<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['ci'];?></td>
			<td><?php echo $row['usuario'];?></td>
			<td><?php echo $row['contrase'];?></td>
			<td><?php echo $row['nombre'];?></td>
			<td><?php echo $row['apellidos'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['tipo'];?></td>
			<th><a href="eliminar.php? id=<?php echo
			$row['id'];?>"><img src="imagenes/basura.jpg"width="30" height="24" ></a></td>
			<th><a href="modificar.php? id=<?php echo
			$row['id'];?>"><img src="imagenes/actualizar.png"width="30" height="24" ></a></td>
<?php
	}
}
else
	{
		echo "No existen datos en la tabla";
	}
$con->close();
?>
</tr>
</table>
</div>
</center>