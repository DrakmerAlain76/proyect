<?php
include ("conexion.php");
$ruta=$_REQUEST['ruta'];
$lineas=$_REQUEST['lineas'];
$inicio=$_REQUEST['inicio'];
$final=$_REQUEST['final'];
$distancia=$_REQUEST['distancia'];
$tiempo=$_REQUEST['tiempo'];
$sql="UPDATE rutas set ruta='$ruta',lineas='$lineas',inicio='$inicio',final='$final',distancia='$distancia',tiempo='$tiempo' where ruta='$ruta'";
$result=$con->query($sql);
if($result)
{
echo "ruta modificada";?>
<script language="javascript">
alert("ACTUALIZACIÓN EXITOSA");
</script>
<?php
echo "<a href=\"tablaruta.php\">Regresar</a><br>";
}
else
{
echo "error al modificar";
}
?>