<?php
	include("conexion.php");
	$cod=$_POST["cod"];
	$linea=$_POST["linea"];
	$sindicato=$_POST["tipo"];
	$grupo=$_POST["grupo"];
	$fecha=$_POST["fecha"];
	$ruta=$_POST["ruta"];
	$ci=$_POST["ci"];
	$sql="INSERT INTO lineas (cod,linea,sindicato,grupo,fecha,id_ruta,id_ci) VALUES 
	('$cod','$linea','$sindicato','$grupo',$fecha,$ruta,$ci)";
    if($con->query($sql)==TRUE){
		echo "Inserción exitosa";
	}
	else{
	echo "Error".$sql."<br>".$con->error;
	}
	$con->close();
?>
