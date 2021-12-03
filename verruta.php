<?php
echo "Mostar Tabla"."<br>";
require("conexion.php");
$sql="SELECT * FROM rutas";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="estilo2.css">
</head>
<body>
	<header id="cabecera">
		<h1>bienvenido administrador</h1>
	</header>
		<nav id=navegacion>
			<ul class="menu">
				<ul class="menu">
				<li><a href="admi.html">inicio</a></li>
				<li><a href="">Agregar</a>
					<ul class="submenu">
						<li><a href="agregare.html">usuarios</a></li>
						<li><a href="ruta.html">ruta</a></li>
						<li><a href="linea.html">linea</a></li>
						<li><a href="movilidad.html">movilidad</a></li>
						<li><a href="control.html">controlar</a></li>
						
					</ul>
				</li>
				<li><a href="">ver tabla</a>
					<ul class="submenu">
						<li><a href="tabla.php">usuarios</a></li>
						<li><a href="accion.php">ingreso</a></li>
						<li><a href="tablaruta.php">ruta</a></li>
						<li><a href="tablamovi.php">autos</a></li>
						<li><a href="tablaco.php">control</a></li>
						<li><a href="tablaper.php">Permisos</a></li>
						
					</ul>
				</li>
				<li><a href="">Mapas</a>
					<ul class="submenu">
						<li><a href="mapas.html">Ver</a></li>
						
					</ul>
				</li>
				<li><a href="">Grafica torta</a>
					<ul class="submenu">
						<li><a href="graficos1/index3.php">Control</a></li>
						<li><a href="graficos2/index5.php">lineas</a></li>
						<li><a href="graficos/index1.php"">usuario</a></li>
						
					</ul>
				</li>	
				<li><a href="">Grafica barras</a>
					<ul class="submenu">
						<li><a href="graficos1/index2.php">Control</a></li>
						<li><a href="graficos2/index4.php">Lineas</a></li>
						<li><a href="graficos/index0.php"">usuario</a></li>
						
					</ul>
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
<table bgcolor="skyblue" border="2">
<td>ruta</td>
<td>lineas</td>
<td>inicio</td>
<td>final</td>
<td>distancia</td>
<td>tiempo</td>
<?php
$result=$con->query($sql);
if($result->num_rows>0){
while ($row=$result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['ruta'];?></td>
<td><?php echo $row['lineas'];?></td>
<td><?php echo $row['inicio'];?></td>
<td><?php echo $row['final'];?></td>
<td><?php echo $row['distancia'];?></td>
<td><?php echo $row['tiempo'];?></td>
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