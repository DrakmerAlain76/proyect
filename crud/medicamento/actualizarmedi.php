<?php
include ("conexion.php");
$cod_medi=$_REQUEST['cod_medi'];
$nombre=$_REQUEST['nombre'];
$hora=$_REQUEST['hora'];
$fecha=$_REQUEST['fecha'];
$sql="UPDATE medicamento set cod_medi='$cod_medi',nombre='$nombre',h='$hora',f='$fecha' where cod_medi='$cod_medi'";
$result=$con->query($sql);
if($result)
{
    header('Location: tablamedi.php');
}
else
{
echo "error al modificar";
}
?>