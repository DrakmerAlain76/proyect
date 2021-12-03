<center>
<?php
echo "Mostar Tabla"."<br>";
require("conexion.php");
$sql="SELECT * FROM rutas";
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
	<header id="cabecera">
		<h1>Bienvenido Cliente</h1>
	</header>
	<div class="contenedor">
		<nav id=navegacion>
			<ul class="menu">
				<li><a href="cliente.html">inicio</a></li>
				<li><a href="listarutas.php">ver ruta</a></li>
				<li><a href="">Mapas</a>
					<ul class="submenu">
						<li><a href="mapas.html">Ver</a></li>
						
					</ul>
				</li>
				<li><a href="">Solicitud</a>
					<ul class="submenu">
						<li><a href="permisos.html">Permiso</a></li>
						
					</ul>
				</li>

				<li>
					<a href="cerrar.php">cerrar sesion</a>
				</li>
			</ul>
		</nav>
</body>
</html>
<link rel="stylesheet" href="estilo3.css">
	<table border="2">
		<thead>
			<td>ruta</td>
			<td>inicio de ruta</td>
			<td>recorrido</td>
			<td>final de ruta</td>
		</thead>>

<?php
$result=$con->query($sql);
if($result->num_rows>0){
while ($row=$result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['ruta'];?></td>
<td><?php echo $row['inicio'];?></td>
<td><?php echo $row['recorrido'];?></td>
<td><?php echo $row['final'];?></td>
<?php
}
}
else{
echo "No existen datos en la tabla";
}
$con->close();
?>
</table>
</div>	
</center>