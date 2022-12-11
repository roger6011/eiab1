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
                        <h2>Directores</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Inicio</a>
                        <a href="">Directores</a>
                    </div>
                </div>
            </div>
        </div>
<div class="about">
    <div class="col-md-12 texto">
        <p align="center"><img src="img/eiab.gif" width="380" height="474" alt=""> </p>
        <DIV class="titulo1">ESCUELA DE IDIOMAS DE LA ARMADA BOLIVIANA</DIV>
            <br>
            <strong>DIRECTORES </strong>
            <ul>
            <li>2001	CF. DEMN. Roger Landivar Rojas</li>
            <li>2002	CF. DEMN. Roger Landivar Rojas</li>
            <li>2003	CF. DEMN. German Vargas Guardia</li>
            <li>2004	CF. DEMN. German Vargas Guardia</li> 
            <li>2005	CF. DEMN. German Vargas Guardia</li>
            <li>2006	CF. DEMN. Napoleón Bustos Martínez</li> 
            <li>2007	CF. DEMN. Napoleón Bustos Martínez</li> 
            <li>2008 	CN. DAEN. Hugo Zelada Mendoza</li> 
            <li>2009	CN. DAEN. Roger Landivar Rojas</li>
            <li>2010 	CN. DAEN. Einar Pantoja Espinoza</li>
            <li>2011	CN. DAEN. Einar Pantoja Espinoza </li>
            <li>2012	CN. DAEN. Orlando Cruz Flores</li>
            <li>2013	CN. DAEN. Orlando Cruz Flores </li>
            <li>2014	CF. DEMN. Aldo Rojas Rivas</li>
            <li>2015 - 2018	CN. DAEN. Carlos Aguirre Vega</li>
            <li>2019	CF. DEMN. Marco Antonio Arevalo Valle</li>
            <li>2020	CN. DAEN. Marco Antonio Crespo Cespedes</li>
            <li>2021	CN. DAEN. Marco Antonio Crespo Cespedes</li>
            <li>2022	CN. DAEN. William Orlando Camacho Martínez</li>
            </ul>
        </div>
    </div>
    <div class='titulo1'></div>
</div> 
<!--/FIN CONTAINER-->
<?php require_once 'footer.php';