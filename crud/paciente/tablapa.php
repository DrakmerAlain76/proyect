<?php 
	require("../../bd/conexion.php");
	// $conexion=mysqli_connect('localhost','root','','proyecto');

 ?>
<center>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../../estilos2.css">
	<link rel="stylesheet" href="../../estilos5.css">
</head>
<body>
	<div class="contenedor">
	<header id="cabecera">
		<h1>AINABRA</h1>
	</header>
		<nav id=navegacion>
		<ul class="menu">
			<!-- revisar admin -->
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
						<li><a href="tablamedi.php">MEDICAMENTO</a></li>
						
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
					<!-- revisar cerrar.php -->
					<a href="cerrar.php">CERRAR SESION</a>
				</li>
		</nav>

<br>
<!-- revisar estilos -->
<link rel="stylesheet" href="estilo3.css">
<table border="2">
		<thead>
			<td>CI</td>
			<td>NOMBRE</td>
			<td>APELLIDO</td>
			<td>CELULAR</td>
			<td>ELIMINAR</td>
			<td>MODIFICAR</td>	
		</thead>

		<?php 
		$sql="SELECT * FROM paciente";
		$result=mysqli_query($con,$sql);
		
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['ci'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['celular'] ?></td>
		<!-- corregido eliminarapa.php? ci && imagenes/basura.jpg && imagenes/actualizar.png && modificar-->
			<th><a href="../crud/paciente/eliminarapa.php? ci=<?php echo
			$mostrar['ci'];?>"><img src="img/basura.jpg"width="30" height="24" ></a></td>
			<th><a href="../crud/paciente/modificarpa.php? ci=<?php echo
			$mostrar['ci'];?>"><img src="img/actualizar.png"width="30" height="24" ></a></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>
</center>