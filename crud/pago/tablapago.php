<center>
<?php
require("../../bd/conexion.php");
$sql="SELECT * FROM pago";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../../css/estilos2.css">
	<link rel="stylesheet" href="../../css/estilos5.css">
<body>
	<div class="contenedor">
	<header id="cabecera">
		<h1>AINABRAS</h1>
	</header>
		<nav id=navegacion>
		<ul class="menu">
			<!-- corregido admin -->
				<li><a href="../administrador/admi.html">PRINCIPAL</a></li>
				<li><a href="">AGREGAR</a>
					<ul class="submenu">
						<!-- corregido  -->
						<li><a href="../administrador/agregare.html">USUARIO</a></li>
						<li><a href="../crud/paciente/paciente.html">PACIENTE</a></li>
						<li><a href="reserva.html">RESERVA</a></li>
						<li><a href="../crud/pago/pago.html">PAGO</a></li>
						<li><a href="../crud/medicamento/medicamento.html">MEDICAMENTO</a></li>
					</ul>
				</li>
				<li><a href="">VER TABLA</a>
					<ul class="submenu">
						<!-- revisar -->
						<li><a href="../usuario/tabla.php">USUARIOS</a></li>
						<li><a href="accion.php">INGRESO</a></li>
						<li><a href="../crud/paciente/tablapa.php">PACIENTE</a></li>
						<li><a href="reserva.php">RESERVA</a></li>
						<li><a href="../crud/pago/tablapago.php">PAGO</a></li>
						<li><a href="../crud/medicamento/tablamedi.php">MEDICAMENTO</a></li>
						
					</ul>
				</li>
				<li><a href="">BUSCAR</a>
					<ul class="submenu">
						<!-- revisar -->
						<li><a href="../report/listar.php">USUARIO</a></li>
						<li><a href="../report/listarhistorial.php">HISTORIAL</a></li>
							
					</ul>
				</li>
				<li>
					<!-- revisar  -->
					<a href="../db/cerrar.php">CERRAR SESION</a>
				</li>
			</ul>
		</nav>
</body>
</html>
<?php  
?>
<!-- estilo -->
<link rel="stylesheet" href="../css/estilo3.css">
<table border="2">
	<thead>
		<td>COD_PAGO</td>
		<td>TRATAMIENTO/OPERACION</td>
		<td>DESCRIPCION</td>
		<td>MONTO</td>
		<td>MONTO TOTAL</td>
		<td>HORA</td>
		<td>FECHA</td>
		<td>CI</td>
		<td>ELIMINAR</td>
		<td>MODIFICAR</td>
	</thead>
	
<?php
$result=$con->query($sql);
if($result->num_rows>0){
while ($row=$result->fetch_assoc()) {
?>
<tr>
	<td><?php echo $row['cod_pago'];?></td>
	<td><?php echo $row['tratamiento'];?></td>
	<td><?php echo $row['descripcion'];?></td>
	<td><?php echo $row['costo'];?></td>
	<td><?php echo $row['costo_total'];?></td>
	<td><?php echo $row['hora'];?></td>
	<td><?php echo $row['fecha'];?></td>
	<td><?php echo $row['ci_pago'];?></td>
	<th><a href="../../crud/pago/eliminarpago.php? cod_pago=<?php echo
	$row['cod_pago'];?>"><img src="../../css/img/basura.jpg"width="30" height="24" ></a></td>
	<th><a href="../../crud/pago/modificarpago.php? cod_pago=<?php echo
	$row['cod_pago'];?>"><img src="../../css/img/actualizar.png"width="30" height="24" ></a></td>
<?php
}
}
else{
echo "No existen datos en la tabla";
}
$con->close();
?>
</tr>
</table>
</div>
</center>