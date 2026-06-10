<?php
$m=$_GET['m'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Recursos Educativos Portable" />
    <meta name="author" content="Maritza Yanina Milla Tarazona" />
    <title>PerúEduca | Recursos Portables</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/styles-sec.css" />
    <link rel="stylesheet" href="../assets/ico-font/style.css" />
    <!--<link rel="stylesheet" type="../text/css" href="assets/slider/css/style.css" />
    <link rel="stylesheet" type="../text/css" href="assets/slider/css/custom.css" />-->
    <noscript>
        <link rel="stylesheet" type="text/css" href="../assets/slider/css/styleNoJS.css" />
    </noscript>

    <script src="../js/jquery-ui/external/jquery/jquery.js"></script>
    <link rel="stylesheet" href="../js/jquery-ui/jquery-ui.css">
    <script src="../js/jquery-ui/jquery-ui.js"></script>
    <script>
     $(function() {
        $( document ).tooltip();
      });
    </script>

    <!--<script src="../js/vendor/jquery.js"></script> -->
    <script src="../js/vendor/modernizr.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../assets/scrolling.js"></script>
    <script type="text/javascript" src="../assets/clients/jquery.carouFredSel.js"></script>
    <script type="text/javascript" src="../assets/slider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="../assets/slider/js/script.js"></script>
    <script type="text/javascript" src="../assets/slider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="../assets/slider/js/jquery.slitslider.js"></script>

    <script type="text/javascript" src="../js/ajax.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="../js/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="../js/fancyBox/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="../js/fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="../js/fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $(".various")
            .attr('rel', 'gallery')
            .fancybox({
                maxWidth    : 900,
                maxHeight   : 720,
                openEffect  : 'fade',
                closeEffect : 'fade',
                //padding     : 0,
                autoSize    : false,
                scrolling   : 'auto',
                afterLoad: function() {
                    this.title = 'Autor: ' + this.title;
                    //this.title = '<a class="btn-descarga" href="' + this.href + '"><div class="icon-download2 icon-desc"></div>Descargar</a> ' + this.title;
                }, 
                helpers: {
                    overlay: {
                        locked: false
                    },
                    title: {
                        type: 'outside'
                    }
                },
                beforeLoad: function() {
                    this.title = $(this.element).attr('caption');
                    this.width = parseInt(this.href.match(/width=[0-9]+/i)[0].replace('width=',''));  
                    this.height = parseInt(this.href.match(/height=[0-9]+/i)[0].replace('height=',''));
                }

            });

            $('#key').keyup(function(e) {
                if(e.keyCode == 13) {
                    BuscarRecurso('../consulta/recursolista-sec.php'); 
                    window.location.href = "#resultado";
                    return false;
                }
            });

            $(".ficha-rec").fancybox({
                width       : 500,
                height      : 400,
                autoSize    : false,
                closeClick  : false,
                openEffect  : 'none',
                closeEffect : 'none',
                helpers: {
                    overlay: {
                        locked: false
                    },
                    title: {
                        type: 'outside'
                    }
                },
            });

            document.getElementById('resultado').style.height='0';
    });
    </script>

</head>
<body>
<!-- INTRO -->
    <div id="intro">
        <div class="small-12 columns text-center title">
            <div class="row">
                <div class="logos_principal">
                    <img src="../img/logo_perueduca.png" width="300" class="espacio" />
                </div>
            </div>
            <div class="fixed-title">
                <div class="intro-info">
                    <div class="ingreso-bienvenida">
                        <img src="../img/mi_mochila.png" width="320" alt="" />
                        <h1>Recursos Portables</h1>
                        <!--<div class="lines lines-center"></div>-->
                        <a href="#services"><h2 class="nivel">NIVEL: SECUNDARIA</h2></a>
                    </div>
                    <div class="texto-bienvenida">
                    <h4>Bienvenidos</h4>
                    <hr/>
                        <p>El Sistema Digital para el Aprendizaje PerúEduca en USB es un producto que ha desarrollado el Ministerio de Educación con el objetivo de brindar a estudiantes de educación secundaria recursos educativos de calidad.</p>

                        <p>El contenido del USB está organizado a la manera de un sitio web y permite la navegación sin necesidad de conectarse a internet.</p>
                    </div>
                </div>
            </div>	
			<a href="#services">
				<div class="arrow-intro"></div>
			</a>	
        </div>
    </div>
<!-- MENU -->
    <!--<div class="row">-->
        <div class="small-12 columns small-centered text-center sticky">
            <nav id="menu-navigation">
                <div class="row">
                <ul>
                    <li class="first">
                        <div class="row collapse logo">
                            <img src="../img/logo_perueduca.png" width="230" />
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="espacio-nav">    
                    <a href="../">
                        <div class="icon-home2"></div>
                        <div class="menu-item">
                            Inicio<span class="item-hide"></span>
                        </div>
                    </a>
                    </li>
                    <li class="espacio-nav">    
                    <a href="#services">
                        <div class="icon-spinner3"></div>
                        <div class="menu-item">
                            Tipo de recurso<span class="item-hide"></span>
                        </div>
                    </a>
                    </li>
                    <li class="espacio-nav">    
                    <a href="#areas">
                        <div class="icon-cabinet"></div>
                        <div class="menu-item">
                            Áreas curriculares<span class="item-hide"></span>
                        </div>
                    </a>
                    </li>
                    <li class="divider"></li>
                    <li class="espacio-nav end">    
                        <div class="row collapse">
                            <div class="large-10 small-9 columns">
                              <input name="key" value="" id="key" type="search" placeholder="Buscar recursos">
                              <input type="hidden" name="m"  value="buscar"/>
                            </div>
                            <div class="large-2 small-3 columns">
                              <a href="#resultado" class="postfix button expand" onclick="BuscarRecurso('../consulta/recursolista-sec.php'); return false"><div class="icon-search icon-buscar"></div></a>
                            </div>
                        </div>
                    </li>
                </ul>
                </div>
            </nav>
        </div>
    <!--</div>	-->	
    
    <div class="wrapper">
	<!-- SERVICES -->	
        <div id="services">
            <div class="small-11 large-12 columns small-centered text-center">
                <h2>Recursos Portables</h2><br/><br/>
                <!--<div class="lines"></div>-->
            </div>
            <div class="row">
                <div class="small-11 large-12 columns small-centered">
                    <div class="row">
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?seccn_cod=15'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/biografias.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Biografías</h3>
                                    <p>Biografías de personajes que forman parte de la historia del Perú.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?seccn_cod=8'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/infografias.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Infografías</h3>
                                    <p>Recurso que contiene elementos para explicar visualmente la información.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?seccn_cod=13'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/modulos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Módulos</h3>
                                    <p>Aplicación interactiva y multimedia para apoyar la enseñanza. Cada explicación teórica viene acompañada de una animación para hacer más visuales la información que se ofrece.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?seccn_cod=1'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/objetos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Objetos de Aprendizaje</h3>
                                    <p>Recursos que desarrollan un tema único representado su base teórica, ejercicios de aplicación y autoevaluación.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?seccn_cod=14'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/textos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Textos del MED</h3>
                                    <p>Documentos elaborados por el Ministerio de educación.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?seccn_cod=2'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/videos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Videos</h3>
                                    <p>Material audiovisual donde abordan contenidos de las diversas áreas curriculares.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- AREAS -->   
        <div id="areas">
            <div class="small-11 large-12 columns small-centered text-center">
                <h2>Recursos Portables</h2><br/><br/>
                <!--<div class="lines"></div>-->
            </div>
            <div class="row">
                <div class="small-11 large-12 columns small-centered">
                    <div class="row">
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?id_area=5'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded lila">
                                            <div class="icon-area"><img src="../img/icons/arte.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Arte</h3>
                                    <p>Desarrolla la sensibilidad, creatividad y pensamiento crítico de los estudiantes para reconocer, valorar y apreciar las características de su cultura y de otras.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?id_area=13'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded">
                                            <div class="icon-area"><img src="../img/icons/cienciayambiente.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Ciencia, Tecnología y Ambiente</h3>
                                    <p>Desarrolla una cultura científica en relación con la naturaleza y la tecnología.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?id_area=9'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded rojo">
                                            <div class="icon-area"><img src="../img/icons/comunicacion.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Comunicación</h3>
                                    <p>Desarrolla el disfrute de la lectura, producción de textos y promueve una mejor comunicación.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?id_area=14'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded celeste2">
                                            <div class="icon-area"><img src="../img/icons/educaciontrabajo.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Educación para el Trabajo</h3>
                                    <p>Desarrolla capacidades para comprender y aplicar principios científicos y tecnológicos.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?id_area=11'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded verde2">
                                            <div class="icon-area"><img src="../img/icons/historia.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Historia, Geografía y Economía</h3>
                                    <p>Promueve el acceso a conocimientos sobre los procesos históricos, sociales, económicos y políticos del Perú y del Mundo. </p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?id_area=10'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded amarillo">
                                            <div class="icon-area"><img src="../img/icons/ingles.png" style="padding-top:12px;" /></div>
                                        </div>
                                    </div>
                                    <h3>Inglés</h3>
                                    <p>Tiene como finalidad el logro de la competencia comunicativa en una lengua extranjera.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?id_area=8'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded verde">
                                            <div class="icon-area"><img src="../img/icons/matematica.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Matemática</h3>
                                    <p>Desarrolla el pensamiento matemático y de la cultura científica para comprender y actuar en el mundo.</p>
                                </div>
                            </a>
                        </div>
                         <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista-sec.php?id_area=15'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded naranja">
                                            <div class="icon-area"><img src="../img/icons/tutoria.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Tutoría y Orientación</h3>
                                    <p>Aborda las necesidades y características de los estudiantes en la etapa evolutiva de la adolescencia.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<!-- THE TEAM -->		
        <div id="resultado"></div> 

    </div>
<!-- FOOTER -->

    <script src="../assets/chart/dist/jquery.easypiechart.min.js"></script>
    <script src="../assets/rate-chart.js"></script>
    <script src="../assets/intro-fade.js"></script>
    <script src="../assets/sticky.js"></script>
    <script src="../assets/sticky-init.js"></script>
    <script src="../assets/rotating-words.js"></script>
    <script src="../assets/slit-slider.js"></script>
    <script src="../assets/clients-slide.js"></script>
    <script src="../assets/menu-on-scroll.js"></script>
    <script type="text/javascript">
        $(document).foundation();
    </script>
	
</body>
</html>	