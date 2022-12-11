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
                        <h2>Convocatoria</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Inicio</a>
                        <a href="">Convocatoria</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <div class="section-header text-center">
                    <p>CONVOCATORIAS</p>
                    <h2>Escuela de Idiomas de la Armada Boliviana</h2>
        </div>

<div class="col-md-12 texto">
La Escuela de Idiomas de la Armada Boliviana, requiere incorporar a los siguinetes profesionales para impartir docencia en el Primer Semestre de la gestión 2022
<br>
<ul>
<li>Convocatoria Docentes de Linguistica  <a role="button" class="btn btn-link" href="http://www.esma.edu.bo/esma/public/doc/contaduria.pdf" target="_blank"><i class="fas fa-file-pdf"></i></i></a></li>
<div class="titulo2">Descargas Generales</div> 
<ul>
<li>Modelo de la Hoja de Vida a presentar  <a role="button" class="btn btn-link" href="http://www.esma.edu.bo/esma/public/doc/hojadevida.docx" target="_blank"><i class="fas fa-file-pdf"></i></a></li>
<br>
</ul>
</div>
</div> 
</div><div class='titulo1'></div>
 </div> 
<!--/FIN CONTAINER-->
<?php require_once 'footer.php';