<?php
	include("conexion.php");
	$ci=$_POST["ci"];
	$nuser=$_POST["nuser"];
	$pw=$_POST["pw"];
	$nom=$_POST["nom"];
	$app=$_POST["app"];
	$email=$_POST["email"];
	$tipo=$_POST["tipo"];
	$sql="INSERT INTO sesion (ci,usuario,contrase,nombre,apellidos,email,tipo) VALUES 
	('$ci','$nuser','$pw','$nom','$app','$email','$tipo')";
    if($con->query($sql)==TRUE){
		header('Location: tabla.php');
	}
	else{
	echo "Error".$sql."<br>".$con->error;
	}
	$con->close();
?>
