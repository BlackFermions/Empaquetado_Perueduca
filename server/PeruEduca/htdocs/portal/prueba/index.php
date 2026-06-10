<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Recursos Educativos Portable" />
    <meta name="author" content="Maritza Yanina Milla Tarazona" />
    <title>PerúEduca | Recursos Educativos Portable</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../assets/ico-font/style.css" />
    <link rel="stylesheet" type="../text/css" href="assets/slider/css/style.css" />
    <link rel="stylesheet" type="../text/css" href="assets/slider/css/custom.css" />
    <noscript>
        <link rel="stylesheet" type="text/css" href="../assets/slider/css/styleNoJS.css" />
    </noscript>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/modernizr.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../assets/scrolling.js"></script>
    <script type="text/javascript" src="../assets/clients/jquery.carouFredSel.js"></script>
    <script type="text/javascript" src="../assets/slider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="../assets/slider/js/script.js"></script>
    <script type="text/javascript" src="../assets/slider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="../assets/slider/js/jquery.slitslider.js"></script>
    
    <script type="text/javascript" src="../js/ajax.js"></script>

    <!-- Add jQuery library -->
    <script type="text/javascript" src="../js/fancyBox/lib/jquery-1.10.1.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="../js/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="../js/fancyBox/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="../js/fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="../js/fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="../js/fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="../js/fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <script type="text/javascript" src="../js/fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="../js/fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $(".various").fancybox({
            maxWidth    : 900,
            maxHeight   : 700,
            fitToView     : false,
            //width       : '80%',
            //height      : '80%',
            autoSize    : true,
            closeClick  : false,
            openEffect  : 'fade',
            closeEffect : 'fade',
            padding     : 0,
            margin      : 0,
            autoCenter: false,
            helpers: {
                overlay: {
                    locked: false
                }
            }
        });
    });
    </script>
</head>
<body>
<!-- INTRO -->
    <div id="intro">
        <div class="small-12 columns text-center title">
            <div class="row">
                <div class="logos_principal">
                    <img src="../img/logo-minedu.png" width="180" class="espacio" />
                    <img src="../img/logo-peru-progreso.png" width="100" />
                </div>
            </div>
            <div class="fixed-title">
                <div class="intro-info">
                    <img src="../img/mi_mochila.png" width="320" alt="" />
                    <h1>Recursos Educativos</h1>
                    <!--<div class="lines lines-center"></div>-->
                    <h2 class="nivel">NIVEL: PRIMARIA</h2>
                </div>
            </div>	
			<a href="#services">
				<div class="arrow-up"></div>

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
                    <a href="#intro">
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
                    <form method="post" action="" onsubmit="MostrarRecurso('../consulta/recursolista.php'); return false">
                        <div class="row collapse">
                            <div class="large-10 small-9 columns">
                              <input type="text" placeholder="Buscar recursos">
                            </div>
                            <div class="large-2 small-3 columns">
                              <a onclick="MostrarRecurso('../consulta/recursolista.php); return false" href="#resultado" class="postfix button expand"><div class="icon-search icon-buscar"></div></a>
                            </div>
                        </div>
                    </form>
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
                <h2>Recursos Educativos</h2><br/><br/>
                <!--<div class="lines"></div>-->
            </div>
            <div class="row">
                <div class="small-11 large-12 columns small-centered">
                    <div class="row">
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=10'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/juegos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Juegos</h3>
                                    <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=13'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/modulos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Módulos</h3>
                                    <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=11'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/relatos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Relatos</h3>
                                    <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=14'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/textos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Textos del MED</h3>
                                    <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <div class="serv">
                                <img src="../img/img-recurso-primaria2.png" />
                               
                            </div>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=2'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="circle-border shadow">
                                        <div class="circle">
                                            <div class="icon-recursos"><img src="../img/icons/videos.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Videos</h3>
                                    <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
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
                <h2>Recursos Educativos</h2><br/><br/>
                <!--<div class="lines"></div>-->
            </div>
            <div class="row">
                <div class="small-11 large-12 columns small-centered">
                    <div class="row">
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?id_area=4'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded">
                                            <div class="icon-area"><img src="../img/icons/cienciayambiente.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Ciencia y Ambiente</h3>
                                    <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
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
                                    <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?id_area=8'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded verde">
                                            <div class="icon-area"><img src="../img/icons/matematica.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Matemática</h3>
                                    <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?id_area=3'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded amarillo">
                                            <div class="icon-area"><img src="../img/icons/personalsocial.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Personal Social</h3>
                                    <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?id_area=7'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded celeste">
                                            <div class="icon-area"><img src="../img/icons/religion.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Educación Religiosa</h3>
                                    <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                </div>
                            </a>
                        </div>
                        <div class="small-12 large-4 columns text-center">
                            <a onclick="MostrarRecurso('../consulta/recursolista.php?id_area=7'); return false" href="#resultado">
                                <div class="serv">
                                    <div class="square-border shadow">
                                        <div class="square rounded naranja">
                                            <div class="icon-area"><img src="../img/icons/tutoria.png" /></div>
                                        </div>
                                    </div>
                                    <h3>Tutoría y Orientación</h3>
                                    <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<!-- THE TEAM -->
        
        <div id="resultado"></div> 

    <!-- JUEGOS -->

    </div>
<!-- FOOTER -->
    <footer>
        <div class="row">
            <div class="small-10 columns small-centered text-center"></div>
        </div>
    </footer>
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