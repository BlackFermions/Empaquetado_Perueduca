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
    <link rel="stylesheet" href="../css/styles.css" />
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

    <!--<script src="../js/vendor/jquery.js"></script>-->
    <script src="../js/vendor/modernizr.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../assets/scrolling.js"></script>
    <script type="text/javascript" src="../assets/clients/jquery.carouFredSel.js"></script>
    <script type="text/javascript" src="../assets/slider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="../assets/slider/js/script.js"></script>
    <script type="text/javascript" src="../assets/slider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="../assets/slider/js/jquery.slitslider.js"></script>

    <script type="text/javascript" src="../js/ajax.js?mm=jk"></script>

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
                    //var recurso = '<?php echo $nombre_file; ?>' ;
                    //this.title = '<a class="btn-descarga" href="' + recurso + '" target="_blank"><div class="icon-download2 icon-desc"></div>Ver en pantalla completa</a> ' + this.title;
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
                    BuscarRecurso('../consulta/recursolista.php'); 
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

    <!-- DESCARGA -->
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
                        <a href="#services"><h2 class="nivel">NIVEL: PRIMARIA</h2></a>
                    </div>
                    <div class="texto-bienvenida">
                    <h4>Bienvenidos</h4>
                    <hr/>
                        <p>El Sistema Digital para el Aprendizaje PerúEduca en USB es un producto que ha desarrollado el Ministerio de Educación con el objetivo de brindar a niños y niñas de educación primaria recursos educativos de calidad.</p>

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
                    <a href="../" >
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
                              <a href="#resultado" class="postfix button expand" onclick="BuscarRecurso('../consulta/recursolista.php'); return false"><div class="icon-search icon-buscar"></div></a>
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
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=15'); return false" href="#resultado">
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
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=3'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/fasciculos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Fascículos</h3>
                                    <p>Colección de documentos para el uso de las actividades de las laptop XO. </p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=10'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/juegos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Juegos</h3>
                                    <p>Una serie de actividades lúdicas diseñadas para reforzar el desarrollo de concentración, lógica y memoria.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=13'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/modulos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Módulos</h3>
                                    <p>Aplicación interactiva y multimedia para apoyar la enseñanza.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=11'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/relatos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Relatos</h3>
                                    <p>Narraciones breves sobre acciones que suceden a unos personajes en el espacio y el tiempo. </p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=9'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/poemas.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Poemas</h3>
                                    <p>Aquí encontrarás algunos de los versos de los poetas más importantes en lengua castellana. </p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=2'); return false" href="#resultado">
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
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?id_area=5'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded lila">
                                            <div class="icon-area"><img src="../img/icons/arte.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Arte</h3>
                                    <p>Contribuye al desarrollo de la capacidad comunicativa, generando vivencias desde las diversas formas de expresión artística.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?id_area=4'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded verde">
                                            <div class="icon-area"><img src="../img/icons/cienciayambiente.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Ciencia y Ambiente</h3>
                                    <p>Área de formación científica que permitirá comprender mejor su entorno y relacionarse con él de manera responsable.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?id_area=9'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded rojo">
                                            <div class="icon-area"><img src="../img/icons/comunicacion.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Comunicación</h3>
                                    <p>Desarrolla un manejo eficiente y pertinente de la lengua para expresarse, comprender, procesar y producir mensajes.</p>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?id_area=6'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded celeste2">
                                            <div class="icon-area"><img src="../img/icons/educacionfisica.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Educación Fisica</h3>
                                    <p>Contribuye al desarrollo de habilidades motrices y conozcan las posibilidades de movimiento de su cuerpo.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?id_area=7'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded celeste">
                                            <div class="icon-area"><img src="../img/icons/religion.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Educación Religiosa</h3>
                                    <p>Propone una formación de la conciencia moral cristiana y en valores.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?id_area=8'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded verde2">
                                            <div class="icon-area"><img src="../img/icons/matematica.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Matemática</h3>
                                    <p>Permite desarrollar el pensamiento matemático y el razonamiento lógico.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-3 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?id_area=3'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded amarillo">
                                            <div class="icon-area"><img src="../img/icons/historia.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Personal Social</h3>
                                    <p>Contribuye al desarrollo integral del estudiante como persona y como miembro activo de la sociedad.</p>
                                </div>
                            </a>
                        </div>
                        <!--<div class="small-12 large-4 columns text-center">
                            <div class="serv">
                                <img src="../img/img-recurso-primaria2.png" />
                               
                            </div>
                        </div>-->
                        
                        
                    </div>
                </div>
            </div>
        </div>

	<!-- THE TEAM -->
        
        <div id="resultado"></div> 

    <!-- JUEGOS -->

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