<?php
	include("conexion.php");
	$cod=$_POST["cod"];
	$placa=$_POST["placa"];
	$color=$_POST["color"];
	$tipo=$_POST["tipo"];
	$sql="INSERT INTO auto (cod_auto,placa,color,tipo) VALUES 
	('$cod','$placa','$color','$tipo')";
    if($con->query($sql)==TRUE){
		echo "Inserción exitosa";
	}
	else{
	echo "Error".$sql."<br>".$con->error;
	}
	$con->close();
?>