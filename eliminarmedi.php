<?php
include("conexion.php");
$cod_medi=$_REQUEST['cod_medi'];
$sql="SELECT * from medicamento";
$result=$con->query($sql);
if($reg=mysqli_fetch_array($result))
	{
		$sql1=("DELETE FROM medicamento where cod_medi='$cod_medi'");
		$result=$con->query($sql1);
		header('Location: tablamedi.php');

	}
else
	{
		echo"No hay elementos";
	}
$con->close();
?>
