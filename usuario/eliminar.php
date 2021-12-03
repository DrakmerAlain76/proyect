<?php
include("conexion.php");
$id=$_REQUEST['id'];
echo "id=".$id;
$sql="SELECT * from sesion";
$result=$con->query($sql);
if($reg=mysqli_fetch_array($result))
	{
		$sql1=("DELETE FROM sesion where id='$id'");
		$result=$con->query($sql1);
		header('Location: tabla.php');

	}
else
	{
		echo"No hay elementos";
	}
$con->close();
?>
