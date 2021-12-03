<?php
include "conexion.php";
session_start();
session_destroy();//Destruye sesión
$con->close();//cerramos conexión
header("Location:index.html");
?>