<?php
include("../bd/conexion.php");
$ci=$_REQUEST['ci'];
$sql="SELECT * from paciente";
$result=$con->query($sql);
if($reg=mysqli_fetch_array($result))
	{
		$sql1=("DELETE FROM paciente where ci='$ci'");
		$result=$con->query($sql1);
		// ? corregido Location: tablapa.php
		header('Location: ../crud/paciente/tablapa.php');
		
	}
else
	{
		echo"No hay elementos";
	}
$con->close();
?>
