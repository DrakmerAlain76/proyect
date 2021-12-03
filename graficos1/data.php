
<?php
header('Content-Type: application/json');
$con = mysqli_connect("localhost","root","","proyecto");///modificar
//base de datos solo de las tablas a usar
$sqlQuery = "SELECT id_control,placa,tipo FROM control ORDER BY id_control";///modificar
//consulta a la base de datos
$result = mysqli_query($con,$sqlQuery);
//var_dump($result); die();
// listado de las tablas
//tres atributos (id_estudiante , nombre , numero o marcas)
$data = array();
foreach ($result as $row) {
	$data[] = $row;
	// var_dump($row);//muestra los valores para la verificacion
}

mysqli_close($con);
//cierra base de datos
echo json_encode($data);
//envia datos JSON

?>



