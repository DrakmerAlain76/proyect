<?php
include("conexion.php");
$cod_pago=$_REQUEST['cod_pago'];
$sql="SELECT * from pago";
$result=$con->query($sql);
if($reg=mysqli_fetch_array($result))
	{
		$sql1=("DELETE FROM pago where cod_pago='$cod_pago'");
		$result=$con->query($sql1);
		header('Location: tablapago.php');
	}
else
	{
		echo"No hay elementos";
	}
$con->close();
?>