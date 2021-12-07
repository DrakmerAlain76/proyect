<?php
	include("../bd/conexion.php");
	$ci=$_POST["ci"];
	$nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $celular=$_POST["celular"];
	$sql="INSERT INTO paciente (ci,nombre,apellido,celular) VALUES 
	('$ci','$nombre','$apellido','$celular')";
    if($con->query($sql)==TRUE){
		// ? corregido Location: tablapa.php
		header('Location: ../crud/paciente/tablapa.php');
	}
	else{
	echo "Error".$sql."<br>".$con->error;
	}
	$con->close();
?>
