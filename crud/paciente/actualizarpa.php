<?php
include ("conexion.php");
$ci=$_REQUEST['ci'];
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$celular=$_REQUEST['celular'];
$sql="UPDATE paciente set ci='$ci',nombre='$nombre',apellido='$apellido',celular='$celular' where ci='$ci'";
$result=$con->query($sql);
if($result)
{
    header('Location: tablapa.php');
}
else
{
echo "error al modificar";
}
?>