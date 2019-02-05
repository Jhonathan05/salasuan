<?php 
include_once ('db/dbs_utilities.php');
session_start();
//include_once ('verify.php');
//$result = run_query();
    if (obtenerMonitor($_SESSION['uid'])) {
        # code...
        //echo "".$_SESSION['uid'];
        $adm = obtenerMonitor($_SESSION['uid']); 
    } else {
        # code...
        header('Location: index.php?error=5');
        die();
    }
    if ($adm['position'] == 'Admin') {
        # code...
        $result = verSolicitudCs();
    }elseif ($adm['position'] == 'Monitor') {
        # code...
        $result = verSolicitudCsMonitor();
    }else{
        $result = verSolicitudCsAuxiliar();
    }

    
//    $result = verSolicitudCs();
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
            </div>
            <?php 
            	if ($result == false ) {
            		echo "No se encuentran solicitudes canceladas";
            	}else{
            ?>
            <table class="table">
                <thead>
                    <tr class="thead">
                        <th class="th-comienzo"> # </th>
                        <th> Nombre Estudiante </th>
                        <th> Sala Solicitada </th>
                        <th> Docente </th>
                        <th> Horario Solicitado </th>
                        <th> Sala Asignada </th>
                        <th> Monitor Que Confirma </th>
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
                            <?php echo $user['home_room']; ?>
                        </td>
                        <td>
                            <?php echo $user['teach']; ?>
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
                        <td class="td-btn">
                            <div>
                                <a class="btn" href="details.php?id=<?php echo $user['id']; ?>" role="button">Detalle</a>
                            </div>
                        </td>
                    </tr>
                    <?php 
						}	// Fin while
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
