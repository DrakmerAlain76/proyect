<?php
include "conexion.php";
if($_POST)
{
		$nuser=$_POST["nuser"];
		$pw=$_POST["pw"];
		$sql="SELECT * FROM sesion where usuario='$nuser' AND contrase='$pw'";
		$result=$con->query($sql);
		session_start();//iniciamos sessión
		$_SESSION["nuser"]=$nuser; //Creamos variables sessión
		$_SESSION["pw"]=$pw;
		if($result->num_rows>0)
		{
			while ($row=$result->fetch_assoc()) 
			{
				$nuser=$_SESSION["nuser"];
				$fecha="NOW()";
				$hora="NOW()";
				$tipo=$row['tipo'];
				$sqli="INSERT INTO accesos(id,nuser,fecha,hora,tipo) VALUES
				('NULL','$nuser',$fecha,$hora,'$tipo')";
				$inser=$con->query($sqli);
				$sql1="SELECT * FROM sesion where usuario='$nuser' AND contrase='$pw' AND tipo='1'";
				$result1=$con->query($sql1);
				if($result1->num_rows>0)
				{
//echo "Bienvenido Administrador".$_SESSION["nuser"];
					header("location:admi.html");
				}
				else
				{
//echo "Bienvenido cliente".$_SESSION["nuser"];
				header("location:cliente.html");
	
				}
			}		
		}//fin de if
		else 
		{
			echo "El Nombre de Usuario o el Password es incorrecto";
		}
}//fin post
$con->close();
?>
	