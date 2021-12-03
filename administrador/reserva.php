<center>
<?php
include"conexion.php";
if($_POST){
	$ci=$_POST['cod_reserva'];
	$h=$_POST['hora'];
	$f=$_POST['fecha'];
	$me=$_POST['mensaje'];
	$ci=$_POST['ci'];

	$sql="SELECT * FROM reserva WHERE h='$h' and f='$f' and obs='Ocupado'";
$res=$con->query($sql);
$obs="Ocupado";
if($res->num_rows>0)
	{
		echo "El Horario está Ocupado";
	}
else
{
	$sql="INSERT INTO registro VALUES ('$ci','$n','$m','$h','$f','$obs','$me')";
	$result=$con->query($sql);
	echo "Se registró correctamente";
}
}
include("conexion.php");
$sql="SELECT * FROM reserva";
?>
<!DOCTYPE html>
<html lang="es">
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
		<nav id="navegacion">
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
						<li><a href="paciente.php">Paciente</a></li>
						<li><a href="reserva.php">Reserva</a></li>
						<li><a href="pago.php">Pago</a></li>
						<li><a href="medicamento.php">medicamento</a></li>
						
					</ul>
				</li>
				<li><a href="">buscar</a>
					<ul class="submenu">
						<li><a href="listar.php">usuario</a></li>
							
					</ul>
				</li>
				<li>
					<a href="cerrar.php">cerrar sesion</a>
				</li>
			</ul>
		</nav>
<link rel="stylesheet" href="estilo3.css">
<table border="2">
<thead>
<tr>
	<th>CI</th>
	<th>HORA</th>
	<th>FECHA</th>
	<th>OBSERVACIONES</th>
	<th>MENSAJE</th>
	<th>ELIMINAR</th>
	<th>MODIFICAR</th>
</tr>
<?php
$result=$con->query($sql);
if($result->num_rows>0){
while ($row=$result->fetch_assoc()) {
?>
<tr>
	<th><?php echo $row['cod_reserva'];?></th>
	<th><?php echo $row['h'];?></th>
	<th><?php echo $row['f'];?></th>
	<th><?php echo $row['obs'];?></th>
	<th><?php echo $row['me'];?></th>
	<th><a href="eliminar.php? id=<?phpecho
	$row['id'];?>"><img src="imagenes/basura.jpg"width="30" height="24" ></a></td>
	<th><a href="modificar.php? id=<?php echo
	$row['id'];?>"><img src="imagenes/actualizar.png"width="30" height="24" ></a></td>
	
</tr>
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
		</div>
</body>
</html>
</center>