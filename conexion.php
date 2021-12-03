<?php
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="proyecto"; 
$con=new mysqli($servername,$username,$password,$dbname); 
if($con->connect_error){ 
 die("Conexión Fallida ".$con->connect_error); 
}
?>