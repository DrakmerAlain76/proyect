<center>
	<?php
	require("../bd/conexion.php");
	$sql = "SELECT * FROM sesion";
	?>
	<!DOCTYPE html>
	<html>

	<head>
		<title></title>
		<!-- <link rel="stylesheet" href="../css/estilos2.css"> -->
		<!-- <link rel="stylesheet" href="../css/estilos5.css"> -->
		<link rel="stylesheet" href="../css/tabla.css">
	</head>

	<body>
		<div class="contenedor">
			<header id="cabecera">
				<h1>AINABRA</h1>
			</header>
			<!-- <nav id=navegacion>
				<ul class="menu">
					<ul class="menu">
						<li><a href="../administrador/admi.html">inicio</a></li>
						<li><a href="">Agregar</a>
							<ul class="submenu">
								<li><a href="../administrador/agregare.html">Usuarios</a></li>
								<li><a href="../administrador/paciente.html">Paciente</a></li>
								<li><a href="../administrador/reserva.html">Reserva</a></li>
								<li><a href="../administrador/pago.html">Pago</a></li>
								<li><a href="../administrador/medicamento.html">Medicamento</a></li>
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
			</nav> -->
	</body>

	</html>
	<?php
	echo "Mostar Tabla" . "<br>";
	?>
	<div class="datagrid">
		<table>
			<thead>
				<th>id</th>
				<th>CI</th>
				<th>USUARIO</th>
				<th>CONTRASEÑA</th>
				<th>NOMBRE</th>
				<th>APELLIDO</th>
				<th>EMAIL</th>
				<th>TIPO</th>
				<th>ELIMINAR</th>
				<th>ACTUALIZAR</th>
			</thead>

			<?php
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
			?>
				<tbody>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['ci']; ?></td>
						<td><?php echo $row['usuario']; ?></td>
						<td><?php echo $row['contrase']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['apellidos']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['tipo']; ?></td>
						<th><a href="eliminar.php? id=<?php echo $row['id']; ?>"><img src="../css/img/basura.jpg" width="30" height="24"></a></td>
						<th><a href="modificar.php? id=<?php echo $row['id']; ?>"><img src="../css/img/actualizar.png" width="30" height="24"></a></td>
					</tr>
				</tbody>
					<?php
				}
			} else {
				echo "No existen datos en la tabla";
			}
			$con->close();
					?>
					
		</table>
	</div>
	</div>
</center>