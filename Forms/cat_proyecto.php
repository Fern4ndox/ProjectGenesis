<?php
/**
 * Created by PhpStorm.
 * User: Fern4ndox
 * Date: 15/08/2018
 * Time: 10:20
 */?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tarea Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tarea Formuario" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="../css/superfish.css">

    <link rel="stylesheet" href="../css/style.css">


    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="../index.html">Formulario</a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li>
                                    <a href="../index.html">Home</a>
                                </li>
                                <li>
                                    <a href="services.html" class="fh5co-sub-ddown">Fomularios</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="developer.html" target="_blank">Desarrolladores</a></li>
                                        <li><a href="expediente.html" target="_blank">Expedientes</a></li>
                                        <li><a href="proyectos.html" target="_blank">Proyectos</a></li>
                                        <li><a href="trabajador.html" target="_blank">Trajabadores</a></li>
                                        <li><a href="requisitos.html" target="_blank">Requisitos</a></li>
                                        <li><a href="info_persona.html" target="_blank">Información Persona</a></li>
                                        <li><a href="expediente_req.html" target="_blank">Requisitos Expediente</a></li>
                                        <li><a href="expediente_req.html" target="_blank">Bitacora</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

        </div>


        <div class="fh5co-hero fh5co-hero-2">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url(../images/blog-2.jpg);">
                <div class="desc animate-box">
                    <h2>Formulario</h2>
                    <span>Categoría Proyecto</a></span>
                </div>
            </div>
        </div>
        <!-- end:header-top -->

        <div id="fh5co-contact" class="animate-box">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="section-title">Información Categoría Proyecto</h3>
                            <p>Por favor ingresar la información correspondiente a la persona Bitacora</p>
                            <ul class="contact-info">
                                <li><i class="icon-folder"></i>Id Expediente</li>
                                <li><i class="icon-map"></i>Departamento</li>
                                <li><i class="icon-map2"></i>Municipio</li>
                                <li><i class="icon-truck"></i>Desarrollador</li>
                                <li><i class="icon-list-numbered"></i>Nombre Proyecto</li>
                                <li><i class="icon-sort-numberic-desc"></i>Longitud</li>
                                <li><i class="icon-sort-numeric-asc"></i>Latitud</li>
                                <li><i class="icon-coin-dollar"></i>Monto Aproximado</li>
                                <li><i class="icon-calendar3"></i>Fecha Inicio</li>
                                <li><i class="icon-calendar4"></i>Fecha Fin</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-pull-12">
                                    <div class="form-group">
                                        <input type="text" id="ID" class="form-control" placeholder="ID Categoría Proyecto" required="yes">
                                    </div>
                                </div>
                                <div class="col-md-pull-12">
                                    <div class="form-group">
                                        <select name="state" id="Departamento"  class="form-control selectpicker" required="yes">
                                            <option value=" " >Departamento</option>
                                            <option>Jutiapa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-pull-12">
                                    <div class="form-group">
                                        <select name="state" id="Municipio"  class="form-control selectpicker" required="yes">
                                        <option value=" " >Municipio</option>
                                        <option>Jutiapa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-pull-12">
                                    <div class="form-group">
                                        <select name="state" id="Desarrollador"  class="form-control selectpicker" required="yes">
                                            <option value=" " >Desarrollador</option>
                                            <option>Jutiapa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="Latitud"  placeholder="Latitud" required="yes">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="Longitud"  placeholder="Longitud" required="yes">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" min="1000.00" max="100000.00" step="100" placeholder="Monto" id="monto">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="DPI"  placeholder="Fecha Inicio" required="yes">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="FirstName"  placeholder="Fecha Final" required="yes">
                                    </div>
                                </div>
                                <div class="co0l-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Crear" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <p>Copyright Fernando Recinos. Todos los derechos reservados</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->


<script src="../js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../js/jquery.waypoints.min.js"></script>
<!-- Stellar -->
<script src="../js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="../js/hoverIntent.js"></script>
<script src="../js/superfish.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="../js/google_map.js"></script>
<!-- Main JS (Do not remove) -->
<script src="../js/main.js"></script>

</body>
</html>


