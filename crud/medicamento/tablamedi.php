<center>
	<?php
	require("../../bd/conexion.php");
	$sql = "SELECT * FROM medicamento";
	?>
	<!DOCTYPE html>
	<html>

	<head>
		<title></title>
		<!-- <link rel="stylesheet" href="../../css/estilos2.css"> -->
		<!-- <link rel="stylesheet" href="../../css/estilos5.css"> -->
		<link rel="stylesheet" href="../../css/tabla.css">
	</head>

	<body>
		<header id="cabecera">
			<h1>AINABRA</h1>
		</header>
		<div class="contenedor">
			<!-- <nav id="navegacion">
				<ul class="menu">
					
					<li><a href="../admistrador/admi.html">PRINCIPAL</a></li>
					<li><a href="">AGREGAR</a>
						<ul class="submenu">
							<li><a href="../administrador/sagregare.html">USUARIO</a></li>
							<li><a href="../administrador/paciente.html">PACIENTE</a></li>
							<li><a href="../administrador/reserva.html">RESERVA</a></li>
							<li><a href="../administrador/pago.html">PAGO</a></li>
							<li><a href="../administrador/medicamento.html">MEDICAMENTO</a></li>
						</ul>
					</li>
					<li><a href="">VER TABLA</a>
						<ul class="submenu">
					
							<li><a href="../usuario/tabla.php">USUARIOS</a></li>
							<li><a href="accion.php">INGRESO</a></li>
							<li><a href="../crud/paciente/tablapa.php">PACIENTE</a></li>
							<li><a href="reserva.php">RESERVA</a></li>
							<li><a href="../crud/pago/tablapago.php">PAGO</a></li>
							<li><a href="../crud/medicamento.php">MEDICAMENTO</a></li>

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
			</nav> -->
	</body>

	</html>
	<!-- corregido estilo  -->
	<!-- <link rel="stylesheet" href="../css/estilo3.css"> -->
	<div class="datagrid">
	<table>
		<thead>
			<th>COD</th>
			<th>NOMBRE</th>
			<th>HORA</th>
			<th>FECHA</th>
			<th>CI</th>
			<th>Eliminar</th>
			<th>Actualizar</th>
		</thead>

		<?php
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
		?>
			<tbody>
				<tr>
					<td><?php echo $row['cod_medi']; ?></td>
					<td><?php echo $row['nombre']; ?></td>
					<td><?php echo $row['h']; ?></td>
					<td><?php echo $row['f']; ?></td>
					<td><?php echo $row['medi_ci']; ?></td>
					<th><a href="eliminarmedi.php? cod_medi=<?php echo $row['cod_medi']; ?>"><img src="../../css/img/basura.jpg" width="30" height="24"></a></td>
					<th><a href="modificarmedi.php? cod_medi=<?php echo $row['cod_medi']; ?>"><img src="../../css/img/actualizar.png" width="30" height="24"></a></td>
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