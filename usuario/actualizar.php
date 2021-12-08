<?php
// aqui
include ("../db/conexion.php");
$id=$_REQUEST['id'];
$nuser=$_REQUEST['usuario'];
$pw=$_REQUEST['contrase'];
$nom=$_REQUEST['nombre'];
$app=$_REQUEST['apellidos'];
$email=$_REQUEST['email'];
$sql="UPDATE sesion set usuario='$nuser',contrase='$pw',nombre='$nom',apellidos='$app',email='$email' where id='$id'";
$result=$con->query($sql);
if($result)
{
header('Location: tabla.php');

}
else
{
echo "error al modificar";
}
?>