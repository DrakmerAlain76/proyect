<?php
session_start();
include "conexion.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Carrito</h1>
			<a href="productos.php" class="btn btn-default">Productos</a>
			<br><br>
<?php

if(isset($_SESSION["car"]) && !empty($_SESSION["car"]))
{
?>
<table class="table table-bordered">
<thead>
	<th>Cantidad</th>
	<th>Producto</th>
	<th>Precio Unitario</th>
	<th>Total</th>
	<th></th>
</thead>
<?php 
foreach($_SESSION["car"] as $c)
{
$productos = $con->query("select * from productos where id=$c[producto_id]");
$r = $productos->fetch_object();
	?>
<tr>
<th><?php echo $c["cantidad"];?></th>
	<td><?php echo $r->nombre;?></td>
	<td>$ <?php echo $r->precio; ?></td>
	<td>$ <?php echo $c["cantidad"]*$r->precio; ?></td>
	<td>
		<a href="operaciones/eliminarcarrito.php?id=<?php echo $c["producto_id"];?>" class="btn btn-danger">Eliminar</a>
	</td>
</tr>
<?php 
}
 ?>
</table>

<form class="form-horizontal" method="post" action="operaciones/proceso.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email del cliente</label>
    <div class="col-sm-5">
      <input type="email" name="email" required class="form-control" placeholder="Email del cliente">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Procesar Venta</button>
    </div>
  </div>
</form>
<?php 
}
else
{
?>
	<p class="alert alert-warning">El carrito esta vacio.</p>
<?php
}
?>
<br><br><hr>


		</div>
	</div>
</div>
</body>
</html>
