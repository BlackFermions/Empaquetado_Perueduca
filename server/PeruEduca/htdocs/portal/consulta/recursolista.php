<?php
	include_once("../libreria/funciones.php");

    $tipo=$_GET["seccn_cod"];
    $area=$_GET["id_area"];
    $key=$_GET["key"];

    if ($tipo != null && $tipo != "") {
        $data=leeRegistroSQL("SELECT c.CONTN_COD, c.CONTT_TITULO, c.CONTT_RESUMEN, c.URL_RECURSO, c.URL_IMAGEN, a.nombre, g.nombre, i.nombre, n.nombre, s.SECCT_TITULO, c.CONTT_AUTOR, s.ICONO, a.icono, o.nombre, s.SECCN_COD FROM contenidos c 
        INNER JOIN tb_organizador o ON (SUBSTR(conocimiento,1,POSITION('|' IN conocimiento)-1))=o.id_organizador 
        INNER JOIN tb_det_area_grado dt ON o.id_det=dt.id_det 
        INNER JOIN tb_area a ON a.id_area=dt.id_area
        INNER JOIN tb_grado g ON g.id_grado=dt.id_grado
        INNER JOIN tb_ciclo i ON i.id_ciclo=g.id_ciclo
        INNER JOIN tb_nivel n ON n.id_nivel=i.id_nivel
        INNER JOIN secciones s ON s.SECCN_COD=c.SECCN_COD
        WHERE n.id_nivel='2' AND s.SECCN_COD=".$tipo." ORDER BY c.CONTT_TITULO ASC");
        $filtro="seccn_cod=";
        $seccn_cod2=$tipo;
    }
    else if ($area != null && $area != "") {
        $data=leeRegistroSQL("SELECT c.CONTN_COD, c.CONTT_TITULO, c.CONTT_RESUMEN, c.URL_RECURSO, c.URL_IMAGEN, a.nombre, g.nombre, i.nombre, n.nombre, s.SECCT_TITULO, c.CONTT_AUTOR, s.ICONO, a.icono, o.nombre, s.SECCN_COD FROM contenidos c 
        INNER JOIN tb_organizador o ON (SUBSTR(conocimiento,1,POSITION('|' IN conocimiento)-1))=o.id_organizador 
        INNER JOIN tb_det_area_grado dt ON o.id_det=dt.id_det 
        INNER JOIN tb_area a ON a.id_area=dt.id_area
        INNER JOIN tb_grado g ON g.id_grado=dt.id_grado
        INNER JOIN tb_ciclo i ON i.id_ciclo=g.id_ciclo
        INNER JOIN tb_nivel n ON n.id_nivel=i.id_nivel
        INNER JOIN secciones s ON s.SECCN_COD=c.SECCN_COD
        WHERE n.id_nivel='2' AND a.id_area=".$area." ORDER BY c.CONTT_TITULO ASC");
        $filtro="id_area=";
        $seccn_cod2=$area;
    }
    else if ( $key!= null &&  $key!= ""){
        $data=leeRegistroSQL("SELECT c.CONTN_COD, c.CONTT_TITULO, c.CONTT_RESUMEN, c.URL_RECURSO, c.URL_IMAGEN, a.nombre, g.nombre, i.nombre, n.nombre, s.SECCT_TITULO, c.CONTT_AUTOR, s.ICONO, a.icono, o.nombre, s.SECCN_COD FROM contenidos c 
        INNER JOIN tb_organizador o ON (SUBSTR(conocimiento,1,POSITION('|' IN conocimiento)-1))=o.id_organizador 
        INNER JOIN tb_det_area_grado dt ON o.id_det=dt.id_det 
        INNER JOIN tb_area a ON a.id_area=dt.id_area
        INNER JOIN tb_grado g ON g.id_grado=dt.id_grado
        INNER JOIN tb_ciclo i ON i.id_ciclo=g.id_ciclo
        INNER JOIN tb_nivel n ON n.id_nivel=i.id_nivel
        INNER JOIN secciones s ON s.SECCN_COD=c.SECCN_COD
        WHERE n.id_nivel='2' AND (c.CONTT_TITULO  LIKE '%$key%' OR s.SECCT_TITULO LIKE '%$key%' OR a.nombre LIKE '%$key%' ) ORDER BY c.CONTT_TITULO ASC");
        $filtro="key=";
        $seccn_cod2=$key;
    }    
?>

<div id="team">
    <div class="row">
        <div class="small-11 large-12 columns small-centered" style="padding: 0 0;">
            <div class="row">
                <div class="small-12 large-3 columns text-center">
                    <div id="nave-recursos">
                        <ul class="nav">
                            <li class="nav-list-item tipo">
                                <a class="menu-link" style="background-color: rgb(68, 68, 68);" >
                                    <span class="hover-target">
                                        <span class="title2" style="color: rgb(255, 255, 255);">Tipo de recurso</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item textos ">
                                <a class="menu-link <?php if($tipo == "15"){ echo 'active'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=15'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/biografias.png" /></span>
                                        </span>
                                        <span class="title">Biografías</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item juegos">
                                <a class="menu-link <?php if($tipo == "3"){ echo 'active'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=3'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/fasciculos.png" /></span>
                                        </span>
                                        <span class="title">Fascículos</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item juegos">
                                <a class="menu-link <?php if($tipo == "10"){ echo 'active'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=10'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/juegos.png" /></span>
                                        </span>
                                        <span class="title">Juegos</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item modulos">
                                <a class="menu-link <?php if($tipo == "13"){ echo 'active'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=13'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/modulos.png" /></span>
                                        </span>
                                        <span class="title">Módulos</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item relatos">
                                <a class="menu-link <?php if($tipo == "11"){ echo 'active'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=11'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/relatos.png" /></span>
                                        </span>
                                        <span class="title">Relatos</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item poemas">
                                <a class="menu-link <?php if($tipo == "9"){ echo 'active'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=9'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/poemas.png" /></span>
                                        </span>
                                        <span class="title">Poemas</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item videos">
                                <a class="menu-link <?php if($tipo == "2"){ echo 'active'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?seccn_cod=2'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/videos.png" /></span>
                                        </span>
                                        <span class="title">Videos</span>
                                    </span>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav">
                            <li class="nav-list-item tipo">
                                <a class="menu-link" style="background-color: rgb(68, 68, 68);" >
                                    <span class="hover-target">
                                        <!--<span class="icon-container"></span>-->
                                        <span class="title2" style="color: rgb(255, 255, 255);">Áreas Curriculares</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item arte">
                                <a class="menu-link <?php if($area == "5"){ echo 'active-arte'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?id_area=5'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/arte.png" /></span>
                                        </span>
                                        <span class="title">Arte</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item ciencia">
                                <a class="menu-link <?php if($area == "4"){ echo 'active-ciencia'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?id_area=4'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/cienciayambiente.png" /></span>
                                        </span>
                                        <span class="title">Ciencia y Ambiente</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item comunicacion">
                                <a class="menu-link <?php if($area == "9"){ echo 'active-comunicacion'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?id_area=9'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/comunicacion.png" /></span>
                                        </span>
                                        <span class="title">Comunicación</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item fisica">
                                <a class="menu-link <?php if($area == "6"){ echo 'active-fisica'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?id_area=6'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/educacionfisica.png" /></span>
                                        </span>
                                        <span class="title">Educación Fisica</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item religion">
                                <a class="menu-link <?php if($area == "7"){ echo 'active-religion'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?id_area=7'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/religion.png" /></span>
                                        </span>
                                        <span class="title">Educación Religiosa</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item matematica">
                                <a class="menu-link <?php if($area == "8"){ echo 'active-matematica'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?id_area=8'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/matematica.png" /></span>
                                        </span>
                                        <span class="title">Matemática</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-list-item personal">
                                <a class="menu-link <?php if($area == "3"){ echo 'active-personal'; }else { echo "class=''"; } ?>" onclick="MostrarRecurso('../consulta/recursolista.php?id_area=3'); return false" href="#resultado">
                                    <span class="hover-target">
                                        <span class="icon-container">
                                            <span class="icon"><img src="../img/icons/historia.png" /></span>
                                        </span>
                                        <span class="title">Personal Social</span>
                                    </span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="small-12 large-9 columns text-center">
                    <h2>Recursos Portables</h2>
                    <div class="row developers" >
                        <?php
                            $total = count($data);
                            include ("../primaria/paginator.php");
                            if($total){
                            for ($i=$desde;$i<$hasta; $i++){
                                if ($data[$i][14]=="2") {
                                    $tamano="&width=640&height=400";
                                }
                                else
                                {
                                    $tamano="&width=900&height=720";
                                }
                        		echo "<div class='small-12 large-6 columns' style='padding-left:0px;' >";
                        		echo "<div class='worker worker-wrap rounded shadow'>";
                        		//echo "<a class=\"rec\" href=\"../recursos".$data[$i][3]."\" data-lightbox-type=\"iframe\" data-lightbox-gallery=\"gallery2\" >";
                                //echo "<a class=\"various fancybox.iframe \" caption =\"".$data[$i][10]."\" href=\"../ver_recurso.php?id=".$data[$i][0]."\" alt=\"\">";
                        		echo "<div class='descripcion'>";
                                echo "<a class=\"various fancybox.iframe \" caption =\"".$data[$i][10]."\" href=\"../ver_recurso.php?id=".$data[$i][0]."".$tamano."\" alt=\"\">";
                        		echo "<div class='imagen'>";
                        		echo "<img class='imgrecurso' src=\"../recursos".$data[$i][4]."\" />";
                        		echo "</div>";
                                echo "</a>";
                        		echo "<div class=\"detalles\">";
                                echo "<a class=\"various fancybox.iframe \" caption =\"".$data[$i][10]."\" href=\"../ver_recurso.php?id=".$data[$i][0]."".$tamano."\" alt=\"\">";
                        		echo "<h5>".$data[$i][1]."</h5>
                        			 </a>
                                        <p>".cortarTexto($data[$i][2],160)."</p>
                        			  </div>";
                                      $cont=strlen($data[$i][3]);
                                        $extension= substr($data[$i][3],$cont-4,$cont);
                                        $url_invertida="";
                                        $url_corregida="";
                                        if($extension=="html"){
                                            $largo = strlen($data[$i][3]);
                                            $url ="";
                                            if( $largo >1){
                                                $url_invertida=strrev($data[$i][3]);
                                                $url_invertida_recortada=explode('/', $url_invertida, 2);
                                                $url_corregida=strrev($url_invertida_recortada[1]);
                                            }
                                            $nombre_file2 =  $url_corregida;
                                            $nombre_file = substr($nombre_file2,1,strlen($nombre_file2)).".rar" ;
                                        }else  { 
                                            $nombre_file=substr($data[$i][3],1,strlen($data[$i][3]));
                                        }
                                echo "<div class='iconos'>
                                        <div class='icono-tipo round'><img src=\"../".$data[$i][11]."\" title=\"".$data[$i][9]."\" width='20px'/></div>
                                        <div class='icono-area round'><img src=\"../".$data[$i][12]."\" title=\"".$data[$i][5]."\" width='20px'/></div>
                                        <a class=\"ficha-rec fancybox.iframe \" href=\"../ficha.php?id=".$data[$i][0]."\"><div class=\"icono-ficha round\"><img src=\"../img/icons/ficha.png\" title=\"Ver ficha de catalogación\" width='16px'/></div></a>
                                        <a class=\" \" href=\"../download.php?file=".$nombre_file."\"><div class=\"icono-descarga round\"><img src=\"../img/icons/descarga.png\" title=\"Descargar recurso\" width='20px'/></div></a>
                                        </div> ";
                        		echo "</div>";
                        		echo "<div class=\"acciones\">
                                        ".$data[$i][8]." |   
                                        Grado: ".$data[$i][6]." | 
                                        Área: ".$data[$i][5]."";

                                        /*$cont=strlen($data[$i][3]);
                                        $extension= substr($data[$i][3],$cont-4,$cont);
                                        if($extension=="html"){
                                            $largo = strlen($data[$i][3]);
                                            $url ="";
                                            if( $largo >1){
                                                if(substr($data[$i][3],0,1)=='/'){
                                                    $url=substr($data[$i][3],1,$largo-1);
                                                }
                                            }
                                            $nombre=substr($data[$i][3],1,strlen($data[$i][3]));
                                            $pieces = explode("/",$nombre);
                                            $seccion = $pieces[0]."/";
                                            $info = pathinfo($nombre);
                                            $nombre_file2 =  basename($nombre,'.'.$info['extension']);
                                            $nombre_file = $seccion.$nombre_file2.".rar" ;
                                        }else  { 
                                            $nombre_file=substr($data[$i][3],1,strlen($data[$i][3]));
                                        }*/

                                        

                                echo "</div>";
                                //echo "</a>
                                echo "</div>
                            </div>";
                            }
                                }else{
                                    print 'No hay recurso en la base de datos';
                                }   
                        ?>
                    </div>
                    <div id="paginator"><?php paginator(); 
                        print '<span> Total: '.$total.' Registros </span>'; ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
    <p>".cortarTexto($data[$i][2],220)."</p>
    <div class="small-12 large-6 columns">
        <div class="worker worker-wrap rounded shadown">	
			<a class="rec" data-lightbox-type="iframe" href="recursos/primaria/recursosedu/modulos/personal_social/sr_sipan/index.html">
                <div class="descripcion">
                    <div class="imagen">
                        <img src="recursos/primaria/img/modulos/personal_social/sr_sipan.jpg" alt="" />
                    </div>
					<div class="detalles">
                        <h5>El señor de Sipán</h5>
                        <p>El módulo desarrolla el tema de "El señor de Sipan" quien fue el máximo gobernante en la cultura Moche. Desde las excavaciones hasta los maravillosos hallazgos de las tumbas reales.</p>      
                    </div>
                </div>
                <div class="acciones">
                    Nivel: Educación Primaria |   
                    Grado: Primaria 3º | 
                    Área: Personal Social
                    <h6 class="round-button">Ver Recurso</h6>
                </div>
			</a>
        </div>
    </div>
</div>
-->