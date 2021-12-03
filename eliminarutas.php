<?php
include("conexion.php");
$ruta=$_REQUEST['ruta'];
$sql="SELECT * from rutas";
$result=$con->query($sql);
if($reg=mysqli_fetch_array($result))
	{
		$sql1=("DELETE FROM rutas where ruta='$ruta'");
		$result=$con->query($sql1);
		echo "Se borró correctamente";
		echo "<a href=\"tablaruta.php\">Listar</a><br>";
	}
else
	{
		echo"No hay elementos";
	}
$con->close();
?>