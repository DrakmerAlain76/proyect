<?php
	include("conexion.php");
	$placas=$_POST["placa"];
	$tipo=$_POST["tipo"];
	$sql="INSERT INTO control (placa,fecha,hora,tipo) VALUES 
	('$placas',NOW(),NOW(),'$tipo')";
    if($con->query($sql)==TRUE){
		echo "Inserción exitosa";
	}
	else{
	echo "Error".$sql."<br>".$con->error;
	}
	$con->close();
?>
