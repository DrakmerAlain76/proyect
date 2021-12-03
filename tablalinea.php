<center>
<?php
require("conexion.php");
$sql="SELECT * FROM lineas";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="estilo2.css">
	<link rel="stylesheet" href="estilos5.css">
    <link rel="stylesheet" href="fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
</head>
<body>
	<div class="contenedor">
	<header id="cabecera">
		<h1>Bienvenido Administrador</h1>
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
						<li><a href="tablaper.php">Linea</a></li>
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
<?php  
echo "Mostar Tabla"."<br>";
?>
<link rel="stylesheet" href="estilo3.css">
<table border="2">
	<thead>
		<td>id_linea</td>
		<td>Linea</td>
		<td>Sindicato</td>
		<td>Grupo</td>
		<td>Fecha</td>
		<td>Id_Ruta</td>
		<td>Id_CI</td>
		<td>Eliminar</td>
		<td>Actualizar</td>
	</thead>
	
<?php
$result=$con->query($sql);
if($result->num_rows>0){
while ($row=$result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['id_linea'];?></td>
<td><?php echo $row['line'];?></td>
<td><?php echo $row['sindicato'];?></td>
<td><?php echo $row['grupo'];?></td>
<td><?php echo $row['fechar'];?></td>
<td><?php echo $row['id_ruta'];?></td>
<td><?php echo $row['id_ci'];?></td>
<th><a href="eliminarli.php? id=<?php echo
$row['id'];?>"><img src="imagenes/basura.jpg"width="30" height="24" ></a></td>
<th><a href="modificarli.php? id=<?php echo
$row['id'];?>"><img src="imagenes/actualizar.png"width="30" height="24" ></a></td>
<?php
}
}
else{
echo "No existen datos en la tabla";
}
$con->close();
?>
<link rel="stylesheet" href="css/bootstrap.css">
</tr>
</table>
</div>
</center>