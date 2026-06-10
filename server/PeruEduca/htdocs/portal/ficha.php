<?php
	include_once("libreria/funciones.php");

    $id=$_GET["id"];

    $data=leeRegistroSQL("SELECT c.CONTN_COD, c.CONTT_TITULO, c.CONTT_RESUMEN, c.URL_RECURSO, c.URL_IMAGEN, a.nombre, g.nombre, i.nombre, n.nombre, s.SECCT_TITULO, c.CONTT_AUTOR, s.ICONO, a.icono, o.nombre FROM contenidos c 
    INNER JOIN tb_organizador o ON (SUBSTR(conocimiento,1,POSITION('|' IN conocimiento)-1))=o.id_organizador 
    INNER JOIN tb_det_area_grado dt ON o.id_det=dt.id_det 
    INNER JOIN tb_area a ON a.id_area=dt.id_area
    INNER JOIN tb_grado g ON g.id_grado=dt.id_grado
    INNER JOIN tb_ciclo i ON i.id_ciclo=g.id_ciclo
    INNER JOIN tb_nivel n ON n.id_nivel=i.id_nivel
    INNER JOIN secciones s ON s.SECCN_COD=c.SECCN_COD
    WHERE c.CONTN_COD=".$id."");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PerúEduca | Recursos Educativos Portable</title>
	<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
	<div id="inline">
    <h2>Ficha de Catalogación</h2>
    <table>
        <tr>
            <td>Autor</td>
            <td><?php echo $data[0][10]; ?></td>
        </tr>
        <tr>
            <td>Nivel</td>
            <td><?php echo $data[0][8]; ?></td>
        </tr>
        <tr>
            <td>Ciclo / Grado</td>
            <td><?php echo "".$data[0][7]." / ".$data[0][6].""; ?></td>
        </tr>
        <tr>
            <td>Área</td>
            <td><?php echo $data[0][5]; ?></td>
        </tr>
        <tr>
            <td>Organizador</td>
            <td><?php echo $data[0][13]; ?></td>
        </tr>
        <tr>
            <td>Descripción</td>
            <td><?php echo $data[0][2]; ?></td>
        </tr>
    </table>
</div>
</body>
</html>