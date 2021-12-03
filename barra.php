<?php
include "conexion.php";
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');

$sql = "SELECT ruta,lineas from rutas";
 $query=$con->query($sql);
 while($row = $query->fetch_array())
 {
 $ruta[] = $row[0];
 $lineas[] = $row[1];
 }
$grafico = new Graph(500, 400, 'auto');
$grafico->SetScale("textlin");
$grafico->title->Set("Gráfica en Barras");
$grafico->xaxis->title->Set("Candidatos");
$grafico->xaxis->SetTickLabels($can);
$grafico->yaxis->title->Set("Cantidad");
$barplot1 =new BarPlot($data);
$barplot1->SetWidth(30); // 30 pixeles de ancho para cada barra
$grafico->Add($barplot1);
$grafico->Stroke();
?>
