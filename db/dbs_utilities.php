<?php 
require_once('dbs_credentialsl.php');	// Carga datos para conexion a BSD
//session_start();

//include_once('verify.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);	// Conectando a BSD
$result = '';
if( $mysqli->connect_errno )	// Verificacion de estado de conexion
{
	echo 'Error en la conexion.';
	exit;
}

function run_query()
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM sala';
	return $mysqli->query($sql);
} 

function verSolicitudT()
{
	global $mysqli, $result;
	$sql = "SELECT * FROM `sala` WHERE `state` LIKE 'Pendiente' ORDER BY `id` ASC LIMIT 10";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}

	//return $result;
}

function verSolicitudMonitor()
{
	global $mysqli, $result;
	$sql = "SELECT * FROM `sala` WHERE `block_r` LIKE 'B' AND `state` LIKE 'Pendiente' ORDER BY `id` ASC LIMIT 10";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}

	//return $result;
}

function verSolicitudAuxiliar()
{
	global $mysqli, $result;
	$sql = "SELECT * FROM `sala` WHERE `block_r` LIKE 'C' AND `state` LIKE 'Pendiente' ORDER BY `id` ASC LIMIT 10";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}

	//return $result;
}

function verSolicitud( $doc_stu )
{
	global $mysqli, $result;
	$sql = "SELECT * FROM sala WHERE doc_st = {$doc_stu} ORDER BY `id` DESC LIMIT 15";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}
	//return $result;
}

function verSolicitudP( $doc_stu)
{
	global $mysqli, $result;

	$sql = "SELECT * FROM sala WHERE doc_st = {$doc_stu} AND state LIKE 'Pendiente' ORDER BY `id` ASC LIMIT 10";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}
	return $result;
}

function verSolicitudEst( $doc_stu)
{
	global $mysqli, $result;

	$sql = "SELECT * FROM sala WHERE doc_st = {$doc_stu} ORDER BY `id` DESC LIMIT 10";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}
	return $result;
}

function verSolicitudC()
{
	global $mysqli, $result;

	$sql = "SELECT * FROM sala WHERE state LIKE 'Asignado' ORDER BY `id` DESC LIMIT 10";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}
	return $result;
}

function verSolicitudCMonitor()
{
	global $mysqli, $result;

	$sql = "SELECT * FROM sala WHERE block_r LIKE 'B' AND state LIKE 'Asignado' ORDER BY `id` DESC LIMIT 10";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}
	return $result;
}

function verSolicitudCAuxiliar()
{
	global $mysqli, $result;

	$sql = "SELECT * FROM sala WHERE block_r LIKE 'C' AND state LIKE 'Asignado' ORDER BY `id` DESC LIMIT 10";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}
	return $result;
}

function verSolicitudCs()
{
	global $mysqli, $result;

	$sql = "SELECT * FROM sala WHERE state LIKE 'Cancelado' ORDER BY `id` DESC LIMIT 10";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}
	return $result;
}

function verSolicitudCsMonitor()
{
	global $mysqli, $result;

	$sql = "SELECT * FROM sala WHERE block_r LIKE 'B' AND state LIKE 'Cancelado' ORDER BY `id` DESC LIMIT 10";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}
	return $result;
}

function verSolicitudCsAuxiliar()
{
	global $mysqli, $result;

	$sql = "SELECT * FROM sala WHERE block_r LIKE 'C' AND state LIKE 'Cancelado' ORDER BY `id` DESC LIMIT 10";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}
	return $result;
}

function verSolicitudId ( $id )
{
	global $mysqli, $result;

	$sql = "SELECT * FROM sala WHERE id = {$id}";
	$result = $mysqli->query($sql);
		if( $result->num_rows )	{	//si la consulta contiene datos entonces
			return $result; // retorna el arreglo con datos.
		}
		else{
			return false;	//returna falso en caso de que no encuentre datos 
		}

	return $result;
}

function agregarSolicitud( $doc_est, $name_est, $block, $home_room, $teach, $date_req, $lapse_t )
{
	
	global $mysqli;
	$sql = "INSERT INTO `eshos_20081125_princ`.`sala` (`id`, `doc_st`, `name_st`, `date_req`, `home_room`, `teach`, `lapse_t`, `block_r`, `asigned_r`, `user_m`, `state`, `reason`, `name_can`) VALUES (null, {$doc_est}, '{$name_est}', '{$date_req}', '{$home_room}', '{$teach}', '{$lapse_t}', '{$block}', '', '', 'Pendiente', '', '')";
	$mysqli->query($sql);

}

function obtenerMonitor ($doc_adm){
	global $mysqli;
	$sql = "SELECT * FROM admin WHERE doc_ad = {$doc_adm}";
	$result = $mysqli->query($sql);
	if ($result->num_rows) {
		return $result->fetch_assoc();
	}else{
		return false;
	}
		
}

function actualizarSala ($id, $homeRoom, $session){
	global $mysqli;
	$sql = "UPDATE `sala` SET `asigned_r` = '{$homeRoom}', `user_m` = '{$session}', `state` = 'Asignado' WHERE `sala`.`id` = {$id}";
	$mysqli->query($sql);

}
function cancelarSalaEst ($id, $name_est, $reason){
	global $mysqli;
	$sql = "UPDATE `sala` SET `state` = 'Cancelado', `reason` = '{$reason}', `name_can` = '{$name_est}' WHERE `sala`.`id` = {$id}";
	$mysqli->query($sql);
}

function cancelarSalaM ($id, $mon_a, $reason){
	global $mysqli;
	$sql = "UPDATE `sala` SET `state` = 'Cancelado', `reason` = '{$reason}', `name_can` = '{$name_est}' WHERE `sala`.`id` = {$id}";
	$mysqli->query($sql);
}
?>