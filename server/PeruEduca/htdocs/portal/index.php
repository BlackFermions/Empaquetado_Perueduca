<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>PerúEduca | Recursos Educativos Portable</title>
        <meta name="description" content="Blueprint: Background Slideshow" />
        <meta name="keywords" content="blueprint, background image slideshow, fullscreen slideshow, jquery, fullscreen image, web development" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="js/bgSlideShow/css/default.css" />
        <link rel="stylesheet" type="text/css" href="js/bgSlideShow/css/component.css" />
        <script src="js/vendor/jquery.js"></script>
        <script src="js/bgSlideShow/modernizr.custom.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="clearfix">
                <span><img src="img/logo_perueduca2.png" width="350" /></span>
                <h1>Recursos Portables</h1>
                <nav>
                    <div id="cbp-bicontrols" class="cbp-bicontrols">
                        <span class="cbp-biprev"></span>
                        <span class="cbp-bipause"></span>
                        <span class="cbp-binext"></span>
                    </div>
                </nav>

            </header>   
            <div class="main">
                <ul id="cbp-bislideshow" class="cbp-bislideshow">
                    <li><img src="img/bg/1.jpg" alt="Recursos Portables"/></li>
                    <li><img src="img/bg/3.jpg" alt="Recursos Portables"/></li>
                    <li><img src="img/bg/4.jpg" alt="Recursos Portables"/></li>
                    <li><img src="img/bg/5.jpg" alt="Recursos Portables"/></li>
                    <li><img src="img/bg/6.jpg" alt="Recursos Portables"/></li>
                </ul>

                <div class="enlace-recursos">
                    <div class="contenido-enlace">
                        <h4>Acceder a los Recursos</h4>
                        <div class="enlace-nivel-p"><a href="primaria/">Nivel Primaria</a></div>
                        <div class="enlace-nivel"><a href="secundaria/">Nivel Secundaria</a></div>
                    </div>
                </div>
            </div>
            <footer class="clearfix">
                <div class="contenido-pie">
                    <div class="logo-pie">
                        <img src="img/logo-minedu.png" width="240"/>
                    </div>
                    <div class="texto-pie">
                        Copyright © 2014 Ministerio de Educación. Todos los derechos reservados.<br/>
                        PerúEduca, Sistema digital para el aprendizaje.<br/>
                        Teléfono: 0800-40210 | Correo: soporte@perueduca.pe | Sitio web: www.perueduca.pe
                    </div>
                </div>
            </footer>
        </div>

        <!-- imagesLoaded jQuery plugin by @desandro : https://github.com/desandro/imagesloaded -->
        <script src="js/bgSlideShow/jquery.imagesloaded.min.js"></script>
        <script src="js/bgSlideShow/cbpBGSlideshow.min.js"></script>
        <script>
            $(function() {
                cbpBGSlideshow.init();
            });
        </script>
    </body>
</html>