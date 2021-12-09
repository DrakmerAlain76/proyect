<?php 
include "../bd/conexion.php";
if (isset($_POST["btn"])) {
	$busca = $_POST["bus"]; //Texto a buscar
	$columna = $_POST["col"]; //Opcion a Buscar
	$sql = "select * from sesion WHERE $columna LIKE '%$busca%'";
} else {
	$sql = "select * from sesion";
}
$result = $con->query($sql);

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Menu de administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Inline validation is very easy to implement using the Architect Framework.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="../css/plantilla/main.css" rel="stylesheet">
<link rel="stylesheet" href="../css/tabla.css">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <!-- colocar el logo -->
                <h1>AINABRA</h1>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">

                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Buscar">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                           </div>
                
            </div>
        </div>       
        
        
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    

                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">REGISTRAR</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                        REGISTRAR
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="../administrador/agregare.html">
                                                <i class="metismenu-icon pe-7s-note2"></i>
                                                USUARIO
                                            </a>
                                        </li>
                                        
                                        <li>
                                            
                                            <a href="../administrador/paciente.html">
                                                <i class="metismenu-icon pe-7s-note2"></i>
                                                PACIENTE</a>
                                        </li>
                                        <li>
                                            
                                            <a href="../administrador/reserva.html">
                                                <i class="metismenu-icon pe-7s-note2"></i>
                                                RESERVA</a>
                                        </li>
                                        <li>
                                            
                                            <a href="../administrador/pago.html">
                                                <i class="metismenu-icon pe-7s-note2"></i>
                                                PAGO</a>
                                        </li>
                                        <li>
                                            
                                            <a href="../administrador/medicamento.html">
                                                <i class="metismenu-icon pe-7s-note2"></i>
                                                MEDICAMENTO</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- --------------------------------------------------------------------------------- -->
                                
                            <li class="app-sidebar__heading">VER DATOS</li>

                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-note2"></i>
                                    VER DATOS
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="../usuario/tabla.php">
                                        
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                            USUARIOS</a>
                                    </li>
                                    <li>
                                        <a href="../crud/paciente/tablapa.php">
                                        
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                            PACIENTE</a>
                                    </li>
                                    <li>
                                        <a href="reserva.php">
                                        
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                            RESERVA</a>
                                    </li>
                                    <li>
                                        <a href="../crud/pago/tablapago.php">
                                        
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                            PAGO</a>
                                    </li>
                                    <li>
                                        <a href="../crud/medicamento/tablamedi.php">
                                       
                                       <i class="metismenu-icon pe-7s-note2"></i>
                                            MEDICAMENTO</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="app-sidebar__heading">BUSCAR</li>
                            <li>
                                <a href="../report/listar.php">
                                    <i class="metismenu-icon pe-7s-note2"></i>
                                    USUARIO
                                </a>
                            </li>
						    <li>
                                <a href="../report/listarhistorial.php">
                                    <i class="metismenu-icon pe-7s-note2"></i>
                                    HISTORIAL
                                </a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <a href="">volver</a>
						<h1>BUSCAR</h1>
                        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
						<form method="POST" action="listar.php">
							<input type="text" name="bus" placeholder="Buscar" required>
							<select name="col">
								<option value="nombre">Nombre</option>
								<option value="usuario">Usuario</option>
								<option value="contrase">Password</option>
								<option value="tipo">Tipo</option>

							</select>
							<input type="Submit" name="btn" value="Buscar">
						</form>
						<?php
						if ($result->num_rows > 0) {
						?>
							
							<br>
							<div class="datagrid">
								<table>
									<thead>
										<th>ID</th>
										<th>CI</th>
										<th>USUARIO</th>
										<th>PASSWORD</th>
										<th>NOMBRE</th>
										<th>APELLIDO</th>
										<th>EMAIL</th>
										<th>TIPO</th>
									</thead>
									<tbody>
										<?php
										while ($row = $result->fetch_array()) {
										?>
											<tbody>
												<tr>
													<td><?php echo $row[0]; ?></td>
													<td><?php echo $row[1]; ?></td>
													<td><?php echo $row[2]; ?></td>
													<td><?php echo $row[3]; ?></td>
													<td><?php echo $row[4]; ?></td>
													<td><?php echo $row[5]; ?></td>
													<td><?php echo $row[6]; ?></td>
													<td><?php echo $row[7]; ?></td>
												</tr>
											</tbody>
									<?php
										}
									} else {
										echo "<br>No Existe en base de datos...";
									}
									?>
									</tbody>
								</table>
							</div>
							<form method="POST" action="reporte.php">
								<?php
								if (isset($_POST["btn"])) {
								?>
									<input type="text" name="bus2" value="<?php echo $busca; ?>" hidden>
									<input type="text" name="col2" value="<?php echo $columna; ?>" hidden>
								<?php
								}
								?>
								<br>
								<input type="submit" name="btn_imp" value="Imprimir">
							</form>
							<a href="listar.php">Recargar</a>
							</div>

                        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                    </div>
                        <div class="main-card mb-3 card">
                            
                        </div>
                    </div>
                    
                    <!-- pie de pagina -->
                    
                </div>
        </div>
    </div>
<script type="text/javascript" src="../css/plantilla/assets/scripts/main.js"></script></body>
</html>
