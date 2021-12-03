<?php
	include("conexion.php");
	$nombre=$_POST["nombre"];
    $hora=$_POST["hora"];
    $fecha=$_POST["fecha"];
	$ci_medi=$_POST["ci_medi"];
	$sql="INSERT INTO medicamento (nombre,h,f,medi_ci) VALUES 
	('$nombre','$hora','$fecha','$ci_medi')";
    if($con->query($sql)==TRUE){
		header('Location: tablamedi.php');
	}
	else{
	echo "Error".$sql."<br>".$con->error;
	}
	$con->close();
?>
