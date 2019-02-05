<?php 
	session_start();
	include_once('db/dbs_utilities.php');
	/*
	require_once('dbs_credentials.php');	// Carga datos para conexion a BSD
	$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);	// Conectando a BSD
	$result = '';
	if( $mysqli->connect_errno )	// Verificacion de estado de conexion
	{
		echo 'Error en la conexion';
		exit;
	}
	*/
	function validarS($session){
		global $mysqli, $result ;
		$sql = "SELECT * FROM admin";
	}
?>