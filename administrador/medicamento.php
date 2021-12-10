<?php
	include("../bd/conexion.php");
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conn, $_POST['nombre']) : false;
    $hora = isset($_POST['hora']) ? mysqli_real_escape_string($conn, $_POST['hora']) : false;
    $fecha = isset($_POST['fecha']) ? mysqli_real_escape_string($conn, trim($_POST['fecha'])) : false;
    $ci_medi = isset($_POST['ci_medi']) ? mysqli_real_escape_string($conn, $_POST['ci_medi']) : false;

	if(!empty($nombre)){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "El nombre está vacía";
	}
	if(!empty($hora)){
		$hora_validado = true;
	}else{
		$hora_validado = false;
		$errores['hora'] = "El hora está vacía";
	}
	if(!empty($fecha)){
		$fecha_validado = true;
	}else{
		$fecha_validado = false;
		$errores['fecha'] = "El fecha está vacía";
	}
	if(!empty($ci_medi)){
		$ci_medi_validado = true;
	}else{
		$ci_medi_validado = false;
		$errores['ci_medi'] = "El ci_medi está vacía";
	}

	// $nombre=$_POST["nombre"];
    // $hora=$_POST["hora"];
    // $fecha=$_POST["fecha"];
	// $ci_medi=$_POST["ci_medi"];

	$sql="INSERT INTO medicamento (nombre,h,f,medi_ci) VALUES 
	('$nombre','$hora','$fecha','$ci_medi')";
    if($con->query($sql)==TRUE){
		// ? corregido ocation: tablamedi.php
		header('Location: ../crud/medicamento/tablamedi.php');
	}
	else{
	echo "Error".$sql."<br>".$con->error;
	}
	$con->close();
?>
