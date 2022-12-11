<?php 
//Pequeña logica para cargar la pagina que queremos abrir
$pagina = isset($_GET['p'])? strtolower($_GET['p']) : 'home';

require_once './header.php';
require_once './menu.php';
require_once './home.php';
require_once './footer.php';