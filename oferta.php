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
                        <h2>Oferta Academica</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Inicio</a>
                        <a href="">Oferta Academica</a>
                    </div>
                </div>
            </div>
        </div>
<!-- Service Start -->
<div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Oferta Academica</p>
                    <h2>Escuela de Idiomas de la Armada Boliviana</h2>
                </div>
                <!--<div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-diet"></i>
                            </div>
                            <div class="service-text">
                                <h3>Healthy Food</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-water"></i>
                            </div>
                            <div class="service-text">
                                <h3>Pure Water</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="service-text">
                                <h3>Health Care</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text">
                                <h3>Primary Education</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>Residence Facilities</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>Social Care</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <!-- Service End -->
        

        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                
                <div class="owl-carousel causes-carousel">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/licenciatura.jpg" alt="Image">
                        </div>
                        
                        <div class="causes-text">
                            <h3>Licenciatura/Técnico Superior en el Idioma Inglés</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p>
                        </div>
                        <div class="causes-btn">
                            <a href="licenciatura.php" class="btn btn-custom">Ver Mas</a>
                            
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/civiles.jpg" alt="Image">
                        </div>
                        
                        <div class="causes-text">
                            <h3>Capacitacion Idioma Inglés (Personal Civil)</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Ver Mas</a>  
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/militar.jpg" alt="Image">
                        </div>
                        
                        <div class="causes-text">
                            <h3>Capacitacion Idioma Inglés (Personal Militar)</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Ver Mas</a>  
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/niños.jpg" alt="Image">
                        </div>
                        
                        <div class="causes-text">
                            <h3>Capacitación Inglés para Niños</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Ver Mas</a>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes End -->

        <?php require_once 'footer.php';