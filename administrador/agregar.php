<?php
	include("../bd/conexion.php");
		$ci = isset($_POST['ci']) ? mysqli_real_escape_string($con, $_POST['ci']) : false;
        $nuser = isset($_POST['nuser']) ? mysqli_real_escape_string($con, $_POST['nuser']) : false;
        $pw = isset($_POST['pw']) ? mysqli_real_escape_string($con, $_POST['pw']) : false;
        $nom = isset($_POST['nom']) ? mysqli_real_escape_string($con, $_POST['nom']) : false;
        $app = isset($_POST['app']) ? mysqli_real_escape_string($con, $_POST['app']) : false;
        $email = isset($_POST['email']) ? mysqli_real_escape_string($con, trim($_POST['email'])) : false;
        $tipo = isset($_POST['tipo']) ? mysqli_real_escape_string($con, $_POST['tipo']) : false;

        
		
	// $ci=$_POST["ci"];
	// $nuser=$_POST["nuser"];
	// $pw=$_POST["pw"];
	// $nom=$_POST["nom"];
	// $app=$_POST["app"];
	// $email=$_POST["email"];
	// $tipo=$_POST["tipo"];
	// ------------------------------------------------------------------------
	$errores = array();
        if(!empty($ci)){
            $ci_validado = true;
        }else{
            $ci_validado = false;
            $errores['ci'] = "El ci no es válido";
        }
        // Validar nuser
        if(!empty($nuser) && !is_numeric($nuser) && !preg_match("/[0-9]/", $nuser)){
            $nuser_validado = true;
        }else{
            $nuser_validado = false;
            $errores['nuser'] = "Los nuser no son válido";
        }
		// Validar la contraseña
        if(!empty($pw)){
            $pw_validado = true;
        }else{
            $pw_validado = false;
            $errores['pw'] = "La pw está vacía";
        }
		//Validar nom
        if(!empty($nom) && !is_numeric($nom) && !preg_match("/[0-9]/", $nom)){
            $nom_validado = true;
        }else{
            $nom_validado = false;
            $errores['nom'] = "El campo nom está vacía";
        }
		//Validar app
        if(!empty($app) && !is_numeric($app) && !preg_match("/[0-9]/", $app)){
            $app_validado = true;
        }else{
            $app_validado = false;
            $errores['app'] = "El campo app está vacía";
        }
		// Validar el email
        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_validado = true;
        }else{
            $email_validado = false;
            $errores['email'] = "El email no es válido";
        }
		//Validar tipo
        if(!empty($tipo)){
            $tipo_validado = true;
        }else{
            $tipo_validado = false;
            $errores['tipo'] = "El campo tipo está vacía";
        }
    
        
        $guardar_usuario = false;
        if(count($errores) == 0){
            $guardar_usuario = true;
            // Cifrar la contraseña
            $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>8]);
            // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
            //ACTUALIZAR
           
            $sql="INSERT INTO sesion (ci,usuario,contrase,nombre,apellidos,email,tipo) VALUES 
			('$ci','$nuser','$pw','$nom','$app','$email','$tipo')";
            $guardar = mysqli_query($con, $sql);
			if($guardar){
                $_SESSION['completado'] = "El registro se ha completado con éxito";
				header('Location: ../usuario/tabla.php');
            }else{
                $_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
            }
            
	    }else{
			$_SESSION['errores'] = $errores;
		}
	
	$con->close();
?>
