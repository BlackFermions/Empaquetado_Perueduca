<?php
 /*
if (!isset($_GET['file']) || empty($_GET['file'])) {
 exit();
}
$root = "recursos/";
$file = $_GET['file'];
$pieces = explode("/",$_GET['file']);
$seccion = $pieces[0]."/";
$path = $root.$file;
echo $path;
$type = '';
if (is_file($path)) {
 $size = filesize($path);
 if (function_exists('mime_content_type')) {
 $type = mime_content_type($path);
 } else if (function_exists('finfo_file')) {
 $info = finfo_open(FILEINFO_MIME);
 $type = finfo_file($info, $path);
 finfo_close($info);
 }
 if ($type == '') {
 $type = "application/force-download";
 }

 //echo $type;
 //exit();
 // Definir headers
 //header("Content-Type: $type");
 header("Content-Disposition: attachment; filename=$file");
 header("Content-Transfer-Encoding: binary");
 header("Content-Length: " . $size);
 // Descargar archivo
 readfile($path);
} else {
 die("El archivo no existe.");
}
*/

$f = $_GET["file"];
$root = "recursos/";
$file = $_GET['file'];
$path = $root.$file;
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$path\"\n");
$fp=fopen("$path", "r");
fpassthru($fp);
//readfile("archivo.rar");
?>