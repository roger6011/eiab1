<?php 
//Pequeña logica para cargar la pagina que queremos abrir
$pagina = isset($_GET['p'])? strtolower($_GET['p']) : 'home';

require_once 'header.php';
require_once 'menu.php';?>
<!-- Page Header Start -->
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Misión y Visión</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Inicio</a>
                        <a href="">Misión y Visión</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/carrusel1.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Misión y Visión</p>
                            <h2>Escuela de Idiomas de la Armada Boliviana</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-1">Misión</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Visión</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                Enseñar idiomas nativos y extranjeros, a fin de contar con talento humano que contribuya al 
                                logro de los objetivos institucionales y nacionales en el ámbito laboral y educativo.
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                Constituirse en una Escuela de alto prestigio académico, que transmita conocimientos, 
                                al personal militar y la sociedad civil, en cuanto a idiomas nativos y extranjeros con 
                                infraestructura y medios necesarios, con equipos y laboratorios de última tecnología, 
                                talento humano, plan de estudios y una enseñanza altamente calificada e integradora, 
                                formando profesionales con reconocida competitividad y excelencia.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
<?php require_once 'footer.php';