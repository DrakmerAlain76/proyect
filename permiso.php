<?php
	include("conexion.php");
	$ci=$_POST["ci"];
	$motivos=$_POST["tipo"];
	$sql="INSERT INTO permiso (ci,motivos) VALUES 
	('$ci','$motivos')";
    if($con->query($sql)==TRUE){
		echo "Inserción exitosa";
	}
	else{
	echo "Error".$sql."<br>".$con->error;
	}
	$con->close();
?>
