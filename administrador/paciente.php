<?php
	include("../bd/conexion.php");
	$ci = isset($_POST['ci']) ? mysqli_real_escape_string($con,  trim($_POST['ci'])) : false;
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($con, $_POST['nombre']) : false;
	$apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($con, $_POST['apellido']) : false;
	$celular = isset($_POST['celular']) ? mysqli_real_escape_string($con, trim($_POST['celular'])) : false;

	$errores = array();
	if(!empty($ci)){
		$ci_validado = true;
	}else{
		$ci_validado = false;
		$errores['ci'] = "El campo ci está vacía";
	}

	if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es válido";
	}
	
	// Validar apellido
	if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)){
		$apellido_validado = true;
	}else{
		$apellido_validado = false;
		$errores['apellido'] = "Los apellido no son válido";
	}
	//Validar celular
	if(!empty($celular)){
		$celular_validado = true;
	}else{
		$celular_validado = false;
		$errores['celular'] = "El campo celular está vacía";
	}

	// $ci=$_POST["ci"];
	// $nombre=$_POST["nombre"];
    // $apellido=$_POST["apellido"];
    // $celular=$_POST["celular"];
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
