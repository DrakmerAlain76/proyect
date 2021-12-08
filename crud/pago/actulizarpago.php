<?php
include ("../../bd/conexion.php");
$cod_pago=$_REQUEST['cod_pago'];
$tratamiento=$_REQUEST['tratamiento'];
$descripcion=$_REQUEST['descripcion'];
$costo=$_REQUEST['costo'];
$costo_total=$_REQUEST['costo_total'];
$hora=$_REQUEST['hora'];
$fecha=$_REQUEST['fecha'];
$ci_pago=$_REQUEST['ci_pago'];
$sql="UPDATE pago set cod_pago='$cod_pago',tratamiento='$tratamiento',descripcion='$descripcion',costo='$costo',costo_total='$costo_total',hora='$hora',fecha='$fecha',ci_pago='$ci_pago' where cod_pago='$cod_pago'";
$result=$con->query($sql);
if($result)
{
    // ? corregido Location: tablapago.php
    header('Location: ../../crud/pago/tablapago.php');
}
else
{
echo "error al modificar";
}
?>