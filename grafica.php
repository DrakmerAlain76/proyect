<?php
    include("conexion.php");
    include("jpgraph/src/jpgraph.php");
    include("jpgraph/src/jpgraph_pie.php");
    include("jpgraph/src/jpgraph_pie3d.php");
    $query=mysqli_query($con,"SELECT votos,candidato FROM grafica");
    
    while($row=mysqli_fetch_array($query)){
        $data[]=$row[0];
        $can[]=$row[1];
    }
    $graph=new PieGraph(550,300,"auto");
    $graph->img->SetAntiAliasing();
    $graph->title->Set("Candidatos y votos");
    $p1=new PiePlot3D($data);
    $p1->SetSize(0.45);
    $p1->SetCenter(0.4);
    $p1->value->SetFont(FF_FONT1,FS_BOLD);
    $p1->value->SetColor("black");
    $p1->SetLabelPos(0.5);
    $p1->SetLegends($can);
    $p1->ExplodeAll();
    $graph->Add($p1);
    $graph->Stroke();
?>
