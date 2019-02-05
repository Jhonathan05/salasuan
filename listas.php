<?php 
include_once ('db/dbs_utilities.php');
session_start();
//$result = run_query();
	if ( $_POST ) {
		# code...
		$ced = (isset($_POST['doc_est'])) ? $_POST['doc_est'] : 'NN' ;
		$opc = 1;
	}elseif ($_GET) {
		# code...
		$ced = (isset($_GET['doc_est'])) ? $_GET['doc_est'] : 'NN' ;
		$opc = (isset($_GET['opc'])) ? $_GET['opc'] : false ;;
	}else{
		/*$ced = 1110533214;
		$opc = 1;*/
        header('Location: index.php');
	}

		if ( $opc == 3) {
            # code...
            $result = verSolicitudEst($ced);
        }elseif ( $opc == 2) {
            # code...
            $result = verSolicitudP($ced);
        }else{
            $result = verSolicitud($ced);
        }
        //echo $ced."-".$opc;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="UAN Calendario">
    <meta name="abstract" content="Calendarios Universidad Antonio Nariño Sede Ibagué">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="css/listas.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/normalize7.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!------------------Font Awesome------------------>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Universidad Antonio Nariño</title>
</head>
<?php include_once ('header.php'); ?>
<body>
    <div class="container">
       <?php
            require('asideIzquierda.php');
        ?>
        <div class="asideDerecha">
            <div class="menu-listado">
                <div>
                    <h1>Listado de Solicitudes</h1>
                </div>
                <div>
                    <a class="btn" href="index.php" role="button">Regresar a Inicio</a>
                </div>
            </div>
            <?php 
            	if ($result == false ) {
            		echo "No se encuentran solicitudes con el numero de cedula: {$ced}";
            	}else{
            ?>
            <table class="table">
                <thead>
                    <tr class="thead">
                        <th class="th-comienzo"> # </th>
                        <th> Quien Solicita</th>
                        <th> Docente </th>
                        <th> Sala Solicitada</th>
                        <th> Fecha </th>
                        <th> Horario Solicitado </th>
                        <th> Sala Asignada </th>
                        <th> Confirmado Por </th>
                        <th> Estado Solicitud </th>
                        <th class="th-fin"> Opci&oacute;n </th>
                    </tr>
                    <?php 
					while ($user = $result->fetch_assoc()) {
						# code...
				?>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $user['id']; ?>
                        </td>
                        <td>
                            <?php echo $user['name_st']; ?>
                        </td>
                        <td>
                            <?php echo $user['teach']; ?>
                        </td>
                        <td>
                            <?php echo $user['home_room']; ?>
                        </td>
                        <td>
                            <?php echo $user['date_req']; ?>
                        </td>
                        <td>
                            <?php echo $user['lapse_t']; ?>
                        </td>
                        <td>
                            <?php echo $user['asigned_r']; ?>
                        </td>
                        <td>
                            <?php 
                            if (empty($user['user_m'])) {
                                # code...
                            }else{
                                $mon_a = obtenerMonitor($user['user_m']);
                                echo $mon_a['name_ad'];
                            }
                             ?>
                        </td>
                        <td>
                            <?php echo $user['state']; ?>
                        </td>
                         <td  class="td-btn">
                        <?php 
                            if ($user{'state'} == 'Cancelado') {
                                # code...
                        ?>
                            <div>
                                <a class="btn" href="details.php?id=<?php echo $user['id']; ?>" role="button">Detalles</a>
                            </div>
                        
                        <?php 
                            }else{
                        ?>
                            <div>
                                <a class="btn" href="cancel.php?id=<?php echo $user['id']; ?>" role="button">Cancelar</a>
                            </div>
                        <?php
                            }
                         ?>
                        </td>
                    </tr>
                    <?php 
                        }   // Fin while
					?>
                </tbody>
            </table>
            <?php
                            require_once('footer2.php');
                            ?>
        </div>
            	<?php } //fin IF ?>
    </div>
</body>

</html>