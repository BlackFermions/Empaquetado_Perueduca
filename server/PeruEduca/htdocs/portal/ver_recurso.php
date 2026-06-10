<?php
	include_once("libreria/funciones.php");

    $id=$_GET["id"];

    $data=leeRegistro("contenidos","CONTT_TITULO, URL_RECURSO, URL_IMAGEN, SECCN_COD","CONTN_COD=".$id."","");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PerúEduca | Recursos Educativos Portable</title>
	<style type="text/css">
	html, body {
		background: #000;
		padding: 0;
		margin: 0;
	}
	.mostrar-video {
		width: 640px;
		height: 400px;
		margin: 0 auto;
		overflow: hidden;
	}
	.mostrar-modulo {
		width: 900px;
		height: 720px;
		margin: 0 auto;
		overflow: hidden;
	}
	.mostrar-pdf {
		width: 900px;
		height: 720px;
		margin: 0 auto;
		overflow: hidden;
	}
	</style>
</head>
<body>
	<?php
		if ($data[0][3]==2) { ?>
			<div class="mostrar-video">
				<div class="reproductor" style="text-align:center; overflow:hidden; width:640px; height:400px;">
					<div id="mediaplayer1">Cargando video...</div> 
				    <script type="text/javascript" src="js/jwplayer2/jwplayer.js"></script>
				    <script type="text/javascript">
				    jwplayer("mediaplayer1").setup({
				        flashplayer: "js/jwplayer2/player.swf",
				        file: "recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>",
				        image: "recursos/<?php echo substr($data[0][2],1,strlen($data[0][2])); ?>",
				        width: "640",
				        height: "400"
						});
				    </script> 				
				</div>
			</div>
	<?php
		}else if ($data[0][3]==13) { ?>
			<div class="mostrar-modulo">
				<iframe id="myFrame" scrolling="no" src="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>" frameborder="0" width="900" height="720"></iframe>
			</div>

	<?php }else if ($data[0][3]==15) { ?>
			<div class="mostrar-pdf">
				<object type="application/pdf" data="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>#view=FitH&amp;toolbar=1&amp;navpanes=0&amp;scrollbar=1" width="900" height="720">
					<param name="src" value="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>#view=FitH&amp;toolbar=1&amp;navpanes=0&amp;scrollbar=1" />
					<p style="text-align:center; color:#ffffff; font-size:13px; lineheight:50px; width: 100%;">Adobe Reader no se encuentra o la versión no es compatible, utiliza el icono para ir a la página de descarga <br />
						<a href="http://get.adobe.com/es/reader/" onclick="this.target='_blank'">
							<img src="images/adobe_reader_button.png" alt="Descargar Adobe Reader" width="163" height="43" style="border: none; padding-top:20px;" />
						</a>
					</p >
	    		</object>
    		</div>
    <?php }else if ($data[0][3]==11) { ?>
			<div class="mostrar-pdf">
				<object type="application/pdf" data="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>#view=FitH&amp;toolbar=1&amp;navpanes=0&amp;scrollbar=1" width="900" height="720">
					<param name="src" value="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>#view=FitH&amp;toolbar=1&amp;navpanes=0&amp;scrollbar=1" />
					<p style="text-align:center; color:#ffffff; font-size:13px; lineheight:50px; width: 100%;">Adobe Reader no se encuentra o la versión no es compatible, utiliza el icono para ir a la página de descarga <br />
						<a href="http://get.adobe.com/es/reader/" onclick="this.target='_blank'">
							<img src="images/adobe_reader_button.png" alt="Descargar Adobe Reader" width="163" height="43" style="border: none; padding-top:20px;" />
						</a>
					</p >
	    		</object>
    		</div>
    <?php }else if ($data[0][3]==9) { ?>
			<div class="mostrar-pdf">
				<object type="application/pdf" data="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>#view=FitH&amp;toolbar=1&amp;navpanes=0&amp;scrollbar=1" width="900" height="720">
					<param name="src" value="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>#view=FitH&amp;toolbar=1&amp;navpanes=0&amp;scrollbar=1" />
					<p style="text-align:center; color:#ffffff; font-size:13px; lineheight:50px; width: 100%;">Adobe Reader no se encuentra o la versión no es compatible, utiliza el icono para ir a la página de descarga <br />
						<a href="http://get.adobe.com/es/reader/" onclick="this.target='_blank'">
							<img src="images/adobe_reader_button.png" alt="Descargar Adobe Reader" width="163" height="43" style="border: none; padding-top:20px;" />
						</a>
					</p >
	    		</object>
    		</div>
    <?php }else if ($data[0][3]==10) { ?>
			<div class="mostrar-modulo">
				<iframe id="myFrame" scrolling="no" src="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>" frameborder="0" width="900" height="720"></iframe>
			</div>
    <?php }else if ($data[0][3]==8) { ?>
			<div class="mostrar-modulo">
				<iframe id="myFrame" scrolling="no" src="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>" frameborder="0" width="900" height="720"></iframe>
			</div>

	<?php }else if ($data[0][3]==1) { ?>
			<div class="mostrar-modulo">
				<iframe id="myFrame" scrolling="no" src="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>" frameborder="0" width="900" height="720"></iframe>
			</div>

	<?php }else if ($data[0][3]==14) { ?>
			<div class="mostrar-pdf">
				<object type="application/pdf" data="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>#view=FitH&amp;toolbar=1&amp;navpanes=0&amp;scrollbar=1" width="900" height="720">
					<param name="src" value="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>#view=FitH&amp;toolbar=1&amp;navpanes=0&amp;scrollbar=1" />
					<p style="text-align:center; color:#ffffff; font-size:13px; lineheight:50px; width: 100%;">Adobe Reader no se encuentra o la versión no es compatible, utiliza el icono para ir a la página de descarga <br />
						<a href="http://get.adobe.com/es/reader/" onclick="this.target='_blank'">
							<img src="images/adobe_reader_button.png" alt="Descargar Adobe Reader" width="163" height="43" style="border: none; padding-top:20px;" />
						</a>
					</p >
	    		</object>
    		</div>
    <?php }else if ($data[0][3]==3) { ?>
			<div class="mostrar-pdf">
				<object type="application/pdf" data="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>#view=FitH&amp;toolbar=1&amp;navpanes=0&amp;scrollbar=1" width="900" height="720">
					<param name="src" value="recursos/<?php echo substr($data[0][1],1,strlen($data[0][1]));?>#view=FitH&amp;toolbar=1&amp;navpanes=0&amp;scrollbar=1" />
					<p style="text-align:center; color:#ffffff; font-size:13px; lineheight:50px; width: 100%;">Adobe Reader no se encuentra o la versión no es compatible, utiliza el icono para ir a la página de descarga <br />
						<a href="http://get.adobe.com/es/reader/" onclick="this.target='_blank'">
							<img src="images/adobe_reader_button.png" alt="Descargar Adobe Reader" width="163" height="43" style="border: none; padding-top:20px;" />
						</a>
					</p >
	    		</object>
    		</div>
    <?php } ?>
</body>
</html>