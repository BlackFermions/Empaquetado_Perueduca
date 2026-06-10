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
function Sexo(){
	$data[0][0]="-1";
	$data[0][1]="Elija";
	$data[1][0]="1";
	$data[1][1]="Masculino";
	$data[2][0]="2";
	$data[2][1]="Femenino";
	return $data;
}
function TipoDocumento(){
	$data[0][0]="-1";
	$data[0][1]="Elija";
	$data[1][0]="1";
	$data[1][1]="DNI";
	$data[2][0]="2";
	$data[2][1]="RUC";
	$data[3][0]="3";
	$data[3][1]="C.E";	
	return $data;
}
function EstadoCivil(){
	$data[0][0]="-1";
	$data[0][1]="Elija";
	$data[1][0]="1";
	$data[1][1]="Soltero(a)";
	$data[2][0]="2";
	$data[2][1]="Casado(a)";
	$data[3][0]="3";
	$data[3][1]="Viudo(a)";
	$data[4][0]="4";
	$data[4][1]="Divorciado(a)";
	$data[5][0]="5";
	$data[5][1]="Conviviente";	
	return $data;
}
function Estado(){
	$data[0][0]="-1";
	$data[0][1]="Elija";
	$data[1][0]="I";
	$data[1][1]="Inactivo";
	$data[2][0]="A";
	$data[2][1]="Activo";
	return $data;	
}
?>