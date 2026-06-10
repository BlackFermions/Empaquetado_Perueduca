<?php
function conectar(){	
	$localhost = "localhost";
	$usuario_BD="root";
	$clave_BD="";
	$basedatos="bdrecursos";	
	mysql_connect($localhost,$usuario_BD,$clave_BD) or die("Error al conectar :".mysql_error());
	mysql_select_db($basedatos) or die("Error al elegir la BBDD :".mysql_error());
}
function desconectar(){
	mysql_close() or die("Error al intentar desconectar del servidor de BBDD : ".mysql_error());	
}
function leeRegistro($tabla,$columnas,$filtro,$orden){
	$tabla=strtolower($tabla);
	if(empty($columnas)){$columnas="*";}
	$sql="Select ".$columnas." from ".$tabla;
	if(!empty($filtro)){ $sql.=" where ".$filtro; }
	if(!empty($orden)){ $sql.=" order by ".$orden; }	
	conectar();
	mysql_query("SET NAMES 'utf8'");
	$resultado=mysql_query($sql) or die(mysql_error());

	$num_resultado=mysql_num_rows($resultado);
	for($i=0;$i<$num_resultado;$i++){
		$fila=mysql_fetch_array($resultado);
		$data[]=$fila;
	}
	desconectar();
	return $data;
}
function leeRegistroSQL($sql){	
	conectar();
	mysql_query("SET NAMES 'utf8'");
	$resultado=mysql_query($sql) or die(mysql_error());
	$num_resultado=mysql_num_rows($resultado);
	for($i=0;$i<$num_resultado;$i++){
		$fila=mysql_fetch_array($resultado);
		$data[]=$fila;
	}
	desconectar();
	return $data;
}
function creaCombo($nombre,$data,$selected,$estilos=""){
	$combo="<select name='".$nombre."' style='".$estilos."'>";
	//$combo.="<option value=-1>elija</option>";
	for($i=0;$i<count($data);$i++){
		$seleccionado="";
		if($data[$i][0]==$selected){
			$seleccionado="Selected";
		}
		$combo.="<option value='".$data[$i][0]."' 
		".$seleccionado.">
		".$data[$i][1]."</option>";
	}
	$combo.="</select>";
	return $combo;
}
function grabaRegistro($tabla,$data){
	$tabla=strtolower($tabla);
	$columnas=array_keys($data);
	$sql="Insert Into ".$tabla."(";
	for($i=0;$i<count($columnas);$i++){
		$sql.=$columnas[$i].",";
	}
	$sql.="FechaCreacion,UsuarioCreacion) ";
	$sql.="values(";
	for($i=0;$i<count($data);$i++){
		$sql.="'".$data[$columnas[$i]]."',";
	}
	$sql.="Now(),".$_SESSION['idActor'].")";
	conectar();
	$resultado=mysql_query($sql) or die(mysql_error());
	desconectar();
	if($resultado){
		$mensaje="El registro se grabo con Exito";
	}
	else {
		$mensaje="No se consiguio grabar el registro: --> ".mysql_error();
	}
	return $mensaje;
}
function actualizaRegistro($tabla,$data,$filtro){
	$tabla=strtolower($tabla);
	$columnas=array_keys($data);
	$sql="Update ".$tabla." set ";
	for($i=0;$i<count($columnas);$i++){
		$sql.=$columnas[$i]."='".$data[$columnas[$i]]."',";
	}
	$sql.="FechaModificacion=Now() , UsuarioModificacion=".$_SESSION['idActor']." ";
	$sql.="Where ".$filtro;
	conectar();
	$resultado=mysql_query($sql);
	if($resultado){
		$mensaje="El registro se actualizo con Éxito";
	}
	else {
		$mensaje="No se consiguio actualizar el registro".mysql_error();
	}
	desconectar();
	return $mensaje;	
}
function inactivaRegistro($tabla,$filtro){
	$tabla=strtolower($tabla);
	$sql="Update ".$tabla." set Estado=0 ";
	if(!empty($filtro)){	
		$sql.=" Where ".$filtro;
	}
	conectar();
	$resultado=mysql_query($sql) or die(mysql_error());	
	if($resultado){
		$mensaje="El registro se borro con Exito";
	}
	else {
		$mensaje="No se consiguio borrar el registro";
	}
	desconectar();
	return $mensaje;	
}
function eliminaRegistro($tabla,$filtro){
	$tabla=strtolower($tabla);
	$sql="Delete from ".$tabla." ";
	if(!empty($filtro)){	
		$sql.=" Where ".$filtro;
	}
	conectar();
	$resultado=mysql_query($sql);	
	desconectar();	
}
function CreaCodigo($tabla,$letras,$caracter){
	$tabla=strtolower($tabla);
	$sql="	Select CONCAT('".strtoupper(substr($tabla,0,3))."',
			LPAD((Max(substring(codigo".$tabla.",5,10))+1),
			".$letras.",'".$caracter."')) as 'codigo'
			from ".$tabla."";
	conectar();
	$rescodigo=mysql_query($sql);
	$filacodigo=mysql_fetch_array($rescodigo);
	$codigo=$filacodigo['codigo'];
	if($codigo==null){
		$codigo=strtoupper(substr($tabla,0,3)).str_pad("1",$letras,$caracter,STR_PAD_LEFT);
		}
	desconectar();
	return $codigo;
	
}
function CreaCodigoActor($tipo,$tamano,$caracter){
	$sql="	Select Concat('".strtoupper($tipo)."',substring(Year(Now()),3,2),
			LPAD(Max(Substring(CodigoActor,4,".$tamano."))+1,
			".$tamano.",".$caracter."))
			as codigo
			from Actor 
			Where 	substring(codigoactor,2,2)=substring(Year(Now()),3,2)";
	conectar();
	$rescodigo=mysql_query($sql);
	$filacodigo=mysql_fetch_array($rescodigo);
	$codigo=$filacodigo['codigo'];
	if($codigo==null){
		$codigo="A1100001";
		}
	desconectar();
	return $codigo;
}
function GeneraClave($tamano){
	$clave="";
	for($i=0;$i<$tamano;$i++){
		$elije=rand(0,2);
			switch ($elije){
				case 0:
					$clave.=chr(rand(65,90));
					break;
				case 1:
					$clave.=chr(rand(97,122));
					break;
				case 2:
					$clave.=chr(rand(48,57));
					break;
			}
	}
	return $clave;
}
function Encripta($original){
	$encriptado="";
	for($i=0;$i<strlen($original);$i++){
		$encriptado.=dechex(ord($original[$i]));
	}
	return $encriptado;
}
function Desencripta($encriptado){
	$desencriptado="";
	for($i=0;$i<strlen($encriptado);$i++){
		$pareja=$encriptado[$i].$encriptado[$i+1];
		$desencriptado.=chr(hexdec($pareja));
		$i++;
	}
	return $desencriptado;
}
function cortarTexto($texto, $numMaxCaract){
	if (strlen($texto) <  $numMaxCaract){
		$textoCortado = $texto;
	}else{
		$textoCortado = substr($texto, 0, $numMaxCaract);
		$ultimoEspacio = strripos($textoCortado, " ");
 
		if ($ultimoEspacio !== false){
			$textoCortadoTmp = substr($textoCortado, 0, $ultimoEspacio);
			if (substr($textoCortado, $ultimoEspacio)){
				$textoCortadoTmp .= '...';
			}
			$textoCortado = $textoCortadoTmp;
		}elseif (substr($texto, $numMaxCaract)){
			$textoCortado .= '...';
		}
	}
 
	return $textoCortado;
}
?>
