<?php
	include("../bd/conexion.php");
	$tratamiento = isset($_POST['tratamiento']) ? mysqli_real_escape_string($con, $_POST['tratamiento']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($con, $_POST['descripcion']) : false;
	$costo = isset($_POST['costo']) ? mysqli_real_escape_string($con, $_POST['costo']) : false;
    $costo_total = isset($_POST['costo_total']) ? mysqli_real_escape_string($con, $_POST['costo_total']) : false;
    $hora = isset($_POST['hora']) ? mysqli_real_escape_string($con, $_POST['hora']) : false;
	$fecha = isset($_POST['fecha']) ? mysqli_real_escape_string($con, $_POST['fecha']) : false;
	$ci_pago = isset($_POST['ci_pago']) ? mysqli_real_escape_string($con, $_POST['ci_pago']) : false;
    
	if(!empty($tratamiento)){
		$tratamiento_validado = true;
	}else{
		$tratamiento_validado = false;
		$errores['tratamiento'] = "La tratamiento está vacía";
	}
	if(!empty($descripcion)){
		$descripcion_validado = true;
	}else{
		$descripcion_validado = false;
		$errores['descripcion'] = "La descripcion está vacía";
	}
	if(!empty($costo)){
		$costo_validado = true;
	}else{
		$costo_validado = false;
		$errores['costo'] = "La costo está vacía";
	}
	if(!empty($costo_total)){
		$costo_total_validado = true;
	}else{
		$costo_total_validado = false;
		$errores['costo_total'] = "La costo_total está vacía";
	}
	if(!empty($hora)){
		$hora_validado = true;
	}else{
		$hora_validado = false;
		$errores['hora'] = "La hora está vacía";
	}

	if(!empty($fecha)){
		$fecha_validado = true;
	}else{
		$fecha_validado = false;
		$errores['fecha'] = "La fecha está vacía";
	}
	if(!empty($ci_pago)){
		$ci_pago_validado = true;
	}else{
		$ci_pago_validado = false;
		$errores['ci_pago'] = "La ci_pago está vacía";
	}

	
	
	
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
