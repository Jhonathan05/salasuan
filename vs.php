<?php 
	include_once('db/dbs_utilities.php');
	//Verificar si es solicitado por POST
	session_start();
	if (!$_POST) {
		# code... Realiza el envio directo al inicio de la pagina con error tipo 3.
		header('Location: index.php?error=3'); 
	}else{
		$user = (isset($_POST['username'])) ? $_POST['username'] : false ;
		$pass = (isset($_POST['password'])) ? $_POST['password'] : false ;
		//echo $user." - ". $pass;

		$user_data = obtenerMonitor($user);

		if ( password_verify( $pass, $user_data['pswd'] ) ) {
			# code...
			$_SESSION['uid'] = $user_data['doc_ad'];
			header('Location: index.php');
			//die();
		} else {
			# code...
			header('Location: login.php?error=0');
		}
		
	}

?>