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
                        <h2>Historia</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Inicio</a>
                        <a href="">Historia</a>
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
                            <p>Reseña Historica</p>
                            <h2>Escuela de Idiomas de la Armada Boliviana</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">Historia</a>
                                </li>
                                
                            </ul>

                            <div class="tab-content ">
                                <div style="text-align: justify" id="tab-content-1" class="container tab-pane active nav-justified">
                                El año 1987, visualizando las necesidades presentes y futuras de la Institución, de contar 
                                con personal que tenga conocimiento en el idioma Inglés, a través de la Dirección General 
                                de Enseñanza e Institutos Navales  (DGEIN) de la Fuerza Naval Boliviana y con el apoyo del 
                                grupo militar de la Embajada de los EE.UU. se inicia la enseñanza del idioma Inglés; en ese 
                                cometido, se comenzó con la impartición de cursos breves al personal de la Armada Boliviana.
                                En el año 1992, con el apoyo del programa del Grupo Militar de la Embajada de los EE.UU. se
                                 recibió en calidad de donación cuatro laboratorios de audio y el material didáctico para la enseñanza del idioma Inglés, mediante el Método American Language Course (ALC), mismos que fueron distribuidos en las diferentes escuelas del Sistema Educativo Naval.
                                Mediante Directiva General de la Fuerza Naval Boliviana Nro. 012/94 de fecha 10 de febrero
                                 de 1994, es creado el Centro de Idiomas de la Fuerza Naval Boliviana, iniciando de esta manera la enseñanza del idioma inglés al personal militar del Comando General de la Armada Boliviana, posteriormente se amplió la enseñanza al personal civil de la Institución, además de implementar otros programas para cubrir las necesidades más específicas del Centro.
                                
                                A través de Resolución Administrativa de la Armada Boliviana Nº 19/03 se modifica el 
                                denominativo de Centro de Idiomas de la Fuerza Naval Boliviana por el de Escuela de 
                                Idiomas de la Fuerza Naval Boliviana.
                                El año 2008, mediante Resolución Ministerial Nro. 319/08, el Ministerio de Educación y
                                 Cultura, acredita y autoriza el  funcionamiento de la Escuela de Idiomas, aprobando el 
                                 Programa Académico de Ingles en el Nivel Técnico Superior y Nivel Licenciatura para 
                                 todas aquellas personas que concluyan el aprendizaje del método ALC y aprueben 
                                 satisfactoriamente, puedan ser certificadas en cualquiera de los niveles citados.
                                El Ministerio de Educación, a través de la Resolución Ministerial Nº 146/2013, de fecha 
                                25 de marzo 2013, aprueba la Estructura Orgánica Académica de la Universidad Militar 
                                “Mcal. Bernardino Bilbao Rioja” estableciendo a la Escuela de Idiomas de la Armada 
                                Boliviana dentro la indicada estructura.
                                A inicios de la gestión 2016, la Escuela de Idiomas de la Armada Boliviana, se 
                                traslada a instalaciones de la Ex-Escuela Naval, ubicada en la calle Juarista 
                                Eguino Nº 400, Zona Norte  Churubamba de la Ciudad de La Paz.

                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    Sed tincidunt, magna ut vehicula volutpat, turpis diam condimentum justo, posuere congue turpis massa in mi. Proin ornare at massa at fermentum. Nunc aliquet sed nisi iaculis ornare. Nam semper tortor eget est egestas, eu sagittis nunc sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent bibendum sapien sed purus molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    Aliquam dolor odio, mollis sed feugiat sit amet, feugiat ut sapien. Nunc eu dignissim lorem. Suspendisse at hendrerit enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed condimentum semper turpis vel facilisis. Nunc vel faucibus orci. Mauris ut mauris rhoncus, efficitur nisi at, venenatis quam. Praesent egestas pretium enim sit amet finibus. Curabitur at erat molestie, tincidunt lorem eget, consequat ligula.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        
<?php require_once 'footer.php';