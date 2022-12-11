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
                        <h2>Licenciatura y Tecnico Superior</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Inicio</a>
                        <a href="">Licenciatura y Tecnico Superior</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Oferta Academica</p>
                    <h2>Escuela de Idiomas de la Armada Boliviana</h2>
                </div>
            </div>
        </div>
            <!-- Single Post Start-->
            <div class="single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                        <img width="1000" height="500" src="img/licenciatura.jpg" />
                            <h2>Licenciatura en el Idioma Inglés</h2>
                            <div class="col-md-12 texto">
                                <h3>Objetivo</h3>

                                <p>Formar talento humano mediante el proceso de enseñanza - aprendizaje del idioma inglés a nivel Licenciatura con la mención 
                                    “Traducción – Interpretación” o “Turismo”, que contribuya con el desarrollo integral del Estado y de la Institución.
                                </p>
                                <h3>Modalidad de Graduación</h3>
                                De acuerdo a lo establecido en el Reglamento de Graduación “EIAB-01-08”, las modalidades de graduación para el nivel 
                                Licenciatura en Escuela de Idiomas de la Armada Boliviana, son las siguientes:
                                <ul>
                                    <li>Tesis</li>
                                    <li>Proyecto de Grado</li>
                                    <li>Examen de Grado</li>
                                    <li>Trabajo dirigido</li>
                                    <li>Por Excelencia</li>
                                     
                                </ul>
                                <h3>Campo Laboral:</h3> 
                                Te puedes desempeñar desde cualquier parte del mundo, con equipos interdisciplinarios y para clientes en todas las áreas y estas son las razones:
                                <ul>
                                    <li>Unidades Académicas de la Armada Boliviana.</li>
                                    <li>Embajadas.</li>
                                    <li>Agencia Turística.</li>
                                    <li>Consultor en entidades públicas y privadas.</li>
                                    <li>Escuela de Idiomas.</li>
                                    <li>Embajadas.</li>
                                </ul>
                                <h3>Diseño Curricular:</h3> 
                                
                                <ul>
                                    <li>La Licenciatura en el idioma inglés comprende treinta y ocho (38) módulos divididos en ocho (08) semestres
                                        y cuatro mil ochocientas ochenta (4880) horas académicas.</li>
                                </ul>
                                <div class="titulo3">Malla curricular:</div> 
                                Descargar Documento <a role="button" class="btn btn-danger" href="doc/mallacurricular.pdf" target="_blank"><i class="far fa-file-pdf"></i></a>
                                
                            </div>
                        </div>                      
                    </div>                    
                </div>
            </div>
        </div>
<?php require_once 'footer.php';