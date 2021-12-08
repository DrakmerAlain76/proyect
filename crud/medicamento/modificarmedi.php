<?php
include("../../bd/conexion.php");
$cod_medi = $_REQUEST['cod_medi'];
$sql = "SELECT * FROM medicamento where cod_medi=$cod_medi";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="../../css/estilo2.css">
	<link rel="stylesheet" href="../../css/fonts.css">
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
			<!-- corregido admi.html -->
			<a href="../administrador/admi.html">volver</a>
		</header>
		<div class="login">
			<article class="fondo">
				<h3>MODIFICAR MEDICAMENTO</h3>
				<?php
				while ($row = mysqli_fetch_assoc($result)) {
				?>
					<!-- corregido actualizarmedi.php -->
					<form method="post" id="formulario" action="../../crud/medicamento/actualizarmedi.php">
						<tr>
							<td>
								<input class="inp" type="hidden" name="cod_medi" value='<?php echo $row['cod_medi']; ?>'>
							</td>
						</tr>
						<tr>
						<tr>
							<td>NOMBRE</td>
							<td><input type="text" class="inp" name="nombre" value='<?php echo $row['nombre']; ?>'></td>
						</tr>
						<td>HORA</td>
						<td><input type="time" class="inp" name="hora" value='<?php echo $row['hora']; ?>'></td>
						</tr>
						<tr>
							<td>FECHA</td>
							<td><input type="date" class="inp" name="fecha" value='<?php echo $row['fecha']; ?>'></td>
						</tr>
						<tr>
							<td>CI</td>
							<td><input type="hidden" class="inp" name="medi_ci" value='<?php echo $row['ci_medi']; ?>'></td>
						</tr>
						<tr>
							<td></td>
							<td><input class="boton" type="submit" value="MODIFICAR"></td>
						</tr>
						</table>
					</form>
				<?php
				}
				?>
			</article>
		</div>
	</div>
</body>
</html>