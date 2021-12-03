<?php
session_start();
include "../conexion.php";
if(isset($_POST['email'])){
	echo "Entro..";
$email=$_POST['email'];
$fh=date('Y-m-d h:i:s');
$q1 = $con->query("insert into lista_carritos(cliente_email,fecha_hora) value('$email','$fh')");
	if($q1){
		$car_id = $con->insert_id;
		foreach($_SESSION["car"] as $c)
		{
		$q2 = $con->query("insert into carrito_productos(producto_id,cantidad,carrito_id) value($c[producto_id],$c[cantidad],$car_id)");
		}
		unset($_SESSION["car"]);
		$q3= $con->query("UPDATE productos set stock=stock-$c[cantidad] where id=$c[producto_id] ")

	}
}
header("Location:../productos.php");
?>
