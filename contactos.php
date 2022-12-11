<?php 
//Pequeña logica para cargar la pagina que queremos abrir
$pagina = isset($_GET['p'])? strtolower($_GET['p']) : 'home';

require_once 'header.php';
require_once 'menu.php';?>
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contactos</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Inicio</a>
                        <a href="">Contactos</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- Single Post Start-->
        <div class="single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content">
                            
                            <h2>Contactos Sede Central La Paz</h2>
                            Dirección:
                            <br> 
                            La Paz - Bolivia
                            <br>
                            Calle Juaristi Eguino Nro. 400  Complejo Educativo Naval (lado de Terminal de Buses de La Paz)
                            <br>
                            Teléfono: 2281981
                            <br>
                            WhatsApp:
                            <a href=" https://wa.me/59171490240" >+591 71490240</a>
                            <br>
                            Facebook: Escuela Idiomas Armada Boliviana
                            
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498.9558940703291!2d-68.14130461355586!3d-16.489735394755666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7cdea43212fa8953!2sEscuela%20Idiomas%20Armada%20Boliviana!5e0!3m2!1ses!2sbo!4v1644251936127!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        
                            <div class="single-content">
                            
                            <h2>Contactos Sub Sede Trinidad</h2>
                            Dirección:
                            <br> 
                            Trinidad - Bolivia
                            <br>
                            Zona Central, Av. 6 de Agosto, Esq. Meliton Villavicencio
                            <br>
                            WhatsApp:
                            <a href=" https://wa.me/59160783528" >+591 60783528</a>
                            <br>
                            Facebook: Escuela de Idiomas de la Armada "Trinidad"
                            
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7587.041135135953!2d-68.13074143435345!3d-16.47992405116539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93dd713b69b3b08b%3A0x571e10e822f40de0!2sBusto%20de%20Eduardo%20Avaroa%2C%20C.%20Melit%C3%B3n%20Villavicencio%20536%2C%20Trinidad!5e0!3m2!1ses-419!2sbo!4v1644253413054!5m2!1ses-419!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    
                </div>
            </div>
        </div>
        <!-- Single Post End-->     
<?php require_once 'footer.php';