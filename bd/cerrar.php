<?php
include "../bd/conexion.php";
session_start();
session_destroy();//Destruye sesión
$con->close();//cerramos conexión
// ? corregido Location:index.html
header("Location: ../index.html");
?>