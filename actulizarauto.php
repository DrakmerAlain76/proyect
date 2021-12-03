<?php
include ("conexion.php");
$ci=$_REQUEST['ci'];
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$placa=$_REQUEST['placa'];
$color=$_REQUEST['color'];
$nascientos=$_REQUEST['nascientos'];
$sql="UPDATE auto set ci='$ci',nombre='$nombre',apellido='$apellido',placa='$placa',color='$color',nascientos='$nascientos' where ci='$ci'";
$result=$con->query($sql);
if($result)
{
echo "datos modificados";?>
<script language="javascript">
alert("ACTUALIZACIÓN EXITOSA");
</script>
<?php
echo "<a href=\"tablamovi.php\">Regresar</a><br>";
}
else
{
echo "error al modificar";
}
?>