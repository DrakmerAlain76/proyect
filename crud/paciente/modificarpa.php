<?php
include("../bd/conexion.php");
$ci = $_REQUEST['ci'];
$sql = "SELECT * FROM paciente where ci=$ci";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="../../estilo3.css">
	<link rel="stylesheet" href="../../estilos5.css">
	<link rel="stylesheet" href="fonts.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
	<style type="text/css">
		input::placeholder {
			color: #fff;
		}
	</style>
</head>

<body>
	<div class="contenedor">
		<header id="cabecera">
			<a href="../administrador/admi.html">volver</a>
		</header>
		<div class="login">
			<article class="fondo">
				<h3>MODIFICAR PACIENTE</h3>
				<?php
				while ($row = mysqli_fetch_assoc($result)) {
				?>
					<!-- corregido actualizarpa.php -->
					<form method="post" id="formulario" action="../crud/paciente/actualizarpa.php">
						<tr>
							<td></td>
							<td><input class="inp" type="hidden" name="ci" value='<?php echo
																					$row['ci']; ?>'></td>
						</tr>
						<tr>
						<tr>
							<td>NOMBRE</td>
							<td><input class="inp" type="text" name="nombre" value='<?php echo
																					$row['nombre']; ?>'></td>
						</tr>
						<tr>
							<td>APELLIDO</td>
							<td><input class="inp" type="text" name="apellido" value='<?php echo
																						$row['apellido']; ?>'></td>
						</tr>
						<tr>
							<td>CELULAR</td>
							<td><input class="inp" type="text" name="celular" value='<?php echo
																						$row['celular']; ?>'></td>
						</tr>
						<td></td>
						<td><input class="boton" type="submit" value="Modificar"></td>
						</tr>
						</table>
					</form>
				<?php
				}
				?>
		</div>
	</div>
</body>

</html>