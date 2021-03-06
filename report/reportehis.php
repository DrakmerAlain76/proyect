<?php
include "conexion.php";
require_once('class.ezpdf.php');
$pdf = new Cezpdf('Carta'); //seleccionamos tipo de hoja
$pdf->selectFont('fonts/Arial.afm'); //seleccionamos fuente a utilizar
$pdf->ezImage("emp.jpeg", 10, 150, 'none', 'left');
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"),12);
$pdf->ezText("<b>Hora:</b> ".date("h:i:s"),12);
$pdf->ezText("<b>----Tabla de Datos Usuarios-----</b>\n",18,'center');
if(isset($_POST["bus2"]) && isset($_POST["col2"]))
{
	$busca=$_POST["bus2"];
	$columna=$_POST["col2"];
	$sql="select ci,nombre,apellido,tratamiento,costo,costo_total,hora,fecha from paciente,pago WHERE $columna LIKE '%$busca%'";
}
else
{
	$sql="SELECT ci,nombre,apellido,tratamiento,costo,costo_total,hora,fecha from paciente,pago";
}
$result=$con->query($sql);
if($result->num_rows>0)
{
	while ($row=$result->fetch_array())
	{
	$data[]=array('ci'=>$row[0],'nombre'=>$row[1],'apellido'=>$row[2],'tratamiento'=>$row[3],'costo'=>$row[4],
	'costo_total'=>$row[5],'hora'=>$row[6],'fecha'=>$row[7]);
	} 
}
else
{
echo "Base de datos vacía";
}
//$titles=array('id'=>'id','nom_com'=>'nom_com','usu'=>'usu','pws'=>'pws','tip'=>'tip');
$pdf->ezTable($data);
ob_end_clean();
$pdf->ezStream();
$con->close();
?>