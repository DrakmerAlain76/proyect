<?php
include("conexion.php");
$ci=$_REQUEST['ci'];
$sql="SELECT * from auto";
$result=$con->query($sql);
if($reg=mysqli_fetch_array($result))
	{
		$sql1=("DELETE FROM auto where ci='$ci'");
		$result=$con->query($sql1);
		echo "Se borró correctamente";
		echo "<a href=\"tablamovi.php\">Listar</a><br>";
	}
else
	{
		echo"No hay elementos";
	}
$con->close();
?>
