<?php
	include("../bd/conexion.php");
	$tratamiento=$_POST["tratamiento"];
	$descripcion=$_POST["descripcion"];
	$costo=$_POST["costo"];
    $costo_total=$_POST["costo_total"];
    $hora=$_POST["hora"];
    $fecha=$_POST["fecha"];
	$ci_pago=$_POST["ci_pago"];
	$sql="INSERT INTO pago (tratamiento,descripcion,costo,costo_total,hora,fecha,ci_pago) VALUES 
	('$tratamiento','$descripcion','$costo','$costo_total','$hora','$fecha','$ci_pago')";
    if($con->query($sql)==TRUE){
		// ? corregido Location: tablampago.php
		header('Location: ../crud/pago/tablapago.php');
	}
	else{
	echo "Error".$sql."<br>".$con->error;
	}
	$con->close();
?>
