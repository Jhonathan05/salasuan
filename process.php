<?php 
include_once ('db/dbs_utilities.php');
session_start();
//echo "process: ".$_SESSION['uid'];
//$result = run_query();

if ($_POST) {
	# code...
	# $_POST['senReq'] Corresponde a el envio inicial de solicitud de sala por parte del usuario [cliente]
	if ( isset($_POST['sendReq']) ) {
		# code...
		$doc_est = (isset($_POST['doc_est'])) ? $_POST['doc_est'] : '' ;
		$name_est = (isset($_POST['name_est'])) ? $_POST['name_est'] : '' ;
		$home_room = (isset($_POST['home_room'])) ? $_POST['home_room'] : '' ;
		echo "string".$home_room;
		if ($home_room == '303' || $home_room == '305' || $home_room == '306' || $home_room == 'Preclinica' || $home_room == 'Biologia') {
			# code...
			$block = "C";
		}else{
			$block = "B";
		}
		echo "".$block;
		$teach = (isset($_POST['teach'])) ? $_POST['teach'] : '' ;
		$date_req = (isset($_POST['date_req'])) ? $_POST['date_req'] : '' ;
		$startTime = (isset($_POST['startTime'])) ? $_POST['startTime'] : '' ;
		$finalTime = (isset($_POST['finalTime'])) ? $_POST['finalTime'] : '' ;
		if ($startTime < $finalTime) {
			# code...
			$lapse_t = "".$startTime." - ".$finalTime."";
			//echo $lapse_t;
			agregarSolicitud( $doc_est, $name_est, $block, $home_room, $teach, $date_req, $lapse_t );

			$result = verSolicitudP($doc_est);
			if ($result->num_rows) {
				# code... // Direcciona a la confirmacion de la solicitud de sala en listas.php
				header('Location:listas.php?doc_est='.$doc_est.'&opc=3');
			}else{
				// Error de carga a la bsd de solicitud de sala
				echo "Error no se han ingresado los datos";
			}
		} else {
			# code... // envia de nuevo a Solicitud.php con error 1 (error en las horas)
			header('Location:request.php?error=1');
		}
	}elseif ( isset($_POST['fRequest']) ) {
		# code...

	}elseif (isset($_POST['sendCancel']) ){
		# code...
		$id = (isset($_POST['id'])) ? $_POST['id'] : '' ;
		$doc_est = (isset($_POST['doc_est'])) ? $_POST['doc_est'] : '' ;
		$name_est = (isset($_POST['name_est'])) ? $_POST['name_est'] : '' ;
		$reason = (isset($_POST['reason'])) ? $_POST['reason'] : '' ;
	#	echo "id: ".$id;
	#	echo " - nombre: ".$name_est;
	#	echo " - motivo: ".$reason;

		cancelarSalaEst ($id, $name_est, $reason);
		header('Location: listas.php?doc_est='.$doc_est.'&opc=3');

	}elseif (isset($_POST['sendCancelM']) ){
		# code...
		if (obtenerMonitor($_SESSION['uid'])) {
	        # code...
	        //echo "".$_SESSION['uid'];
	    } else {
	        # code...
	        header('Location: index.php?error=6');
	        die();
	    }
		$id = (isset($_POST['id'])) ? $_POST['id'] : '' ;
		$uid = (isset($_SESSION['uid'])) ? $_SESSION['uid'] : '' ;
		$reason = (isset($_POST['reason'])) ? $_POST['reason'] : '' ;

		$mon_a = obtenerMonitor($user['uid']);
	#	echo "id: ".$id;
	#	echo " - nombre: ".$name_est;
	#	echo " - motivo: ".$reason;

		cancelarSalaM ($id, $mon_a, $reason);
		header('Location: listamcs.php?mon_a='.$mon_a.'');

	}else{
		//direcciona directamente a Solicitud para que el usuario digite la solicitud de salas.
		header('Location:request.php?error=2');
	}

	//$lapse_t = "".$startTime." - ".$finalTime."";
	//$opc = 2;
	/*
	$result = verSolicitudP($doc_est);
		if ($result->num_rows) {
			# code... // Direcciona a la confirmacion de la solicitud de sala en listas.php
			header('Location:listas.php?doc_est='.$doc_est.'&opc=2');
		}else{
			// Error de carga a la bsd de solicitud de sala
			echo "error no se han ingresado los datos";
		}
	*/
} elseif ($_GET) {
	# code...

	if ( isset($_GET['id']) ) {
		# code...
		$idSolicitud = (isset($_GET['id'])) ? $_GET['id'] : '' ;
		$homeRoom = (isset($_GET['home_room'])) ? $_GET['home_room'] : '' ;

		actualizarSala ($idSolicitud, $homeRoom, $_SESSION['uid']);
		
		//echo " . ".$idSolicitud." - ".$homeRoom;
		header('Location: listams.php');
		
	}else{
		//header('Location: index.php');
	}
}else {
	# code...
}
?>