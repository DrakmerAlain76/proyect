<?php
	include("conexion.php");
	$ruta=$_POST["ruta"];
	$inicio=$_POST["inicio"];
	$recorrido=$_POST["recorrido"];
	$final=$_POST["final"];
	$ci=$_POST["ci"];
	$sql="INSERT INTO rutas (ruta,inicio,recorrido,final,ru_ci) VALUES 
	('$ruta','$inicio','$recorrido','$final','$ci')";
    if($con->query($sql)==TRUE){
		echo "Inserción exitosa";
	}
	else{
	echo "Error".$sql."<br>".$con->error;
	}
	$con->close();
?>