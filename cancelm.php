<?php 
include_once('verify.php');
include_once('db/dbs_utilities.php');

    if (obtenerMonitor($_SESSION['uid'])) {
        # code...
        //echo "".$_SESSION['uid'];
    } else {
        # code...
        header('Location: index.php?error=5');
        die();
    }
if ($_GET) {
    # code...
    $id = (isset($_GET['id'])) ? $_GET['id'] : b ;
}else{
    header('Location: index.php?error=4');
}

$result = verSolicitudId($id);
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>

<head>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta charset="utf-8">
    <meta name="description" content="UAN Calendario">
    <meta name="abstract" content="Calendarios Universidad Antonio Nariño Sede Ibagué">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/stylesRequestOriginal.css">
    <link rel="stylesheet" type="text/css" href="css/normalize7.css">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <title>Cancelacion De Solicitud</title>
</head>
<?php include_once('header.php'); ?>
<body>
    <div class="contenedor">
        <div class="cuadro">
            <div class="titulo">
                <h2>Formulario de Cancelacion</h2>
                <hr>
            </div>
            <div class="contenido">

                <div class="formulario">
                    <form name="fCancelM" action="process.php" method="POST">
                        <div class="datos-horario">
                            <div class="hora-inicio">
                                N° Solicitud : <input name="id" class="botons" type="text" id="redondo" value="<?php echo $user['id'];?>" readonly>
                            </div>
                        </div>

                        <hr>
                        <div class="datos-estudiante">
                            <input name="doc_est" type="text" class="form-control" value="<?php echo $user['doc_st']; ?>" type="number" readonly>
                            <input name="name_est" type="text" class="form-control" value="<?php echo $user['name_st']; ?>" required="" type="text" readonly>
                        </div>
                        <hr>
                        <!--<div class="titulo">
                            <h2>Informaci&oacute;n del Sal&oacute;n</h2>
                            <hr>
                        </div>-->
                        <div class="datos-salon">
                            <input type="text" class="form-control" value="Solicitado - <?php echo $user['home_room']; ?>" required="" autocomplete="off" type="text" readonly>
                        </div>
                        <hr>
                        <div class="datos-salon">
                            <select class="form-control" name="reason" required="">
                            <option id="redondo" value="">Motivo De Cancelacion</option>
                                <option value="Fecha Erronea"> Fecha Erronea</option>
                                <option value="Evento UAN"> Evento UAN</option>
                                <option value="Sala Ya Solicitada"> Solicitud Duplicada</option>
                                <option value="Cancelacion De Clase"> Cancelacion De Clase</option>
                                <option value="Sin Salas Disponibles"> Sin Salas Disponibles</option>
                                <option value="Las fechas exceden los 8 dias"> Las fechas exceden los 8 dias</option>
                                <option value="Solicitada Con Menos De 1 Dia"> Solicitada Con Menos De 1 Dia</option>
                         </select>
                        </div>
                        <hr>
                        <!--<div class="titulo">
                            <h2>Informaci&oacute;n del Docente</h2>
                            <hr>
                        </div>-->
                        <div class="datos-docente">
                            <input type="text" class="form-control" value="<?php echo $user['teach']; ?>" required="" autocomplete="off" type="text" readonly>
                        </div>
                        <hr>
                       <!-- <div class="titulo">
                            <h2>Informaci&oacute;n de Horario</h2>
                            <hr>
                        </div>-->
                        <div class="datos-dia">
                            <!--<p>Dia a separar</p>-->
                            <input class="botons" type="date" required="" step="1" min="2017-01-01" max="2017-12-31" value="<?php echo $user['date_req'];?>" readonly>
                        </div>
                        <hr>
                        <div class="datos-horario">
                            <div class="hora-inicio">
                                <input class="botons" type="text" id="redondo" value="<?php echo $user['lapse_t'];?>" readonly>
                            </div>
                        </div>
                        <div class="boton-enviar">
                            <button type="submit" class="btn btn-inverse btn-lg btn-block" name="sendCancelM" value="Enviar Solicitud">Cancelar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

</body>
<?php include_once('footer.php'); ?>

</html>
	