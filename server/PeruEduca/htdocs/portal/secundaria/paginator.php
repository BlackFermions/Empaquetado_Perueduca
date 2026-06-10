<?php
if(!isset($mostrar)){ $mostrar = 8; }
if(!isset($cantidad)){ $cantidad = 8; }
$paginas = ceil($total / $cantidad);
if(!isset($_GET['pg'])){
    $inicial = 0; 
    $pg = 1;  
}else{ 
	$pg = $_GET['pg'];
    $inicial = ($pg - 1) * $cantidad; 
}
$desde = $inicial;
if($desde + $mostrar < $total) {
	$hasta = $desde + $mostrar;
}else{
	$hasta = $desde + ($total - $desde);
}
if(!isset($buscar)){ $buscar=''; }
$intervalo = ceil(($mostrar/2));
$desdex = $pg - $intervalo -1;
$hastax = $pg + $intervalo -2;
if($desdex < 1){ 
	$hastax -= ($desdex - 1);
	$desdex = 1;
}
if($hastax > $paginas){
	$desdex -= ($hastax - $paginas);
	$hastax = $paginas; 
	if($desdex < 1){
		$desdex = 1;
	}
}

function paginator(){
	$load=$_REQUEST['load'];
	
	global $pg;
	global $desdex;
	global $hastax;
	global $paginas;
	global $buscar;
	
	global $filtro;
	global $seccn_cod2;

	if($pg <> 1){ 
		$url = $pg - 1; 
		print "<a onclick=\"MostrarRecurso('../consulta/recursolista-sec.php?".$filtro."".$seccn_cod2."&pg=1".$buscar."'); return false\" href=\"#resultado\"><img src=\"../img/paginator/first.gif\" width=\"18\" height=\"13\" alt=\"Primero\" align=\"absbottom\" /></a>";
		print "<a onclick=\"MostrarRecurso('../consulta/recursolista-sec.php?".$filtro."".$seccn_cod2."&pg=".$url.$buscar."'); return false\" href=\"#resultado\"><img src=\"../img/paginator/prev.gif\" width=\"11\" height=\"13\" alt=\"Anterior\" align=\"absbottom\" /></a>";
	}else{
		print '<img src="../img/paginator/first-off.gif" width="18" height="13" alt="Primero" align="absbottom" /> ';
		print '<img src="../img/paginator/prev-off.gif" width="11" height="13" alt="Anterior" align="absbottom" /> ';
	}
	for($i=$desdex; $i<=$hastax; $i++){
		($i<$hastax) ? ($sep="") : ($sep="");
		if ($i == $pg) {
			print "<span class='pnumero'>".$i."</span> $sep";
		} else {
			print "<span class=\"pactiva\"><a class=\"pnumero\" onclick=\"MostrarRecurso('../consulta/recursolista-sec.php?".$filtro."".$seccn_cod2."&pg=".$i.$buscar."'); return false\" href=\"#resultado\">".$i."</a> $sep</span> ";
		}
	}
	if($pg < $paginas){
		$url = $pg + 1;
		print "<a onclick=\"MostrarRecurso('../consulta/recursolista-sec.php?".$filtro."".$seccn_cod2."&pg=".$url.$buscar."'); return false\" href=\"#resultado\"><img src=\"../img/paginator/next.gif\" width=\"11\" height=\"13\" alt=\"Siguiente\" align=\"absbottom\" /></a>";
		print "<a onclick=\"MostrarRecurso('../consulta/recursolista-sec.php?".$filtro."".$seccn_cod2."&pg=".$paginas.$buscar."'); return false\" href=\"#resultado\"><img src=\"../img/paginator/last.gif\" width=\"18\" height=\"13\" alt=\"Final\" align=\"absbottom\" /></a>";
	}else{
		print ' <img src="../img/paginator/next-off.gif" width="11" height="13" alt="Primero" align="absbottom" />';
		print ' <img src="../img/paginator/last-off.gif" width="18" height="13" alt="Final" align="absbottom" />';
	}
	
}
?>