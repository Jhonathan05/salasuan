<?php 
include_once('verify.php');
include_once('db/dbs_utilities.php');

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
    <title>Detalles Cancelacion</title>
</head>
<?php include_once('header.php'); ?>
<body>
    <div class="contenedor">
        <div class="cuadro">
            <div class="titulo">
                <h2>Detalles Cancelacion</h2>
                <hr>
            </div>
            <div class="contenido">

                <div class="formulario">
                    <form name="fCancel" action="listas.php" method="POST">
                        <div class="datos-horario">
                            <div class="hora-inicio">
                                N° Cancelacion : <input name="id" class="botons" type="text" id="redondo" value="<?php echo $user['id'];?>" readonly>
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
                            <input type="text" class="form-control" value="Sala Solicitada - <?php echo $user['home_room']; ?>" required="" autocomplete="off" type="text" readonly>
                        </div>
                        <hr>
                        <?php 
                            if ($user['asigned_r'] == "") {
                                # code...
                            }else{
                        ?>
                            <div class="datos-salon">
                                <input type="text" class="form-control" value="Sala Asignada - <?php echo $user['asigned_r']; ?>" required="" autocomplete="off" type="text" readonly>
                            </div>
                            <hr>
                        <?php
                            }
                         ?>
                        <?php  ?>
                        <!--<div class="titulo">
                            <h4>Motivo Cancelacion</h4>
                            <hr>
                        </div>-->
                        <div class="datos-salon">
                            <input type="text" class="form-control" value="Motivo - <?php echo $user['reason']; ?>" required="" autocomplete="off" type="text" readonly>
                        </div>
                        <hr>
                        <!--<div class="titulo">
                            <h4>Informaci&oacute;n del Docente</h4>
                            <hr>
                        </div>-->
                        <div class="datos-docente">
                            <input type="text" class="form-control" value="Docente - <?php echo $user['teach']; ?>" required="" autocomplete="off" type="text" readonly>
                        </div>
                        <hr>
                       <!-- <div class="titulo">
                            <h2>Informaci&oacute;n de Horario</h2>
                            <hr>
                        </div>-->

                        <div class="datos-dia">
                            <!--<p>Dia a separar</p>-->
                            <input class="botons" type="text" required="" step="1" min="2017-01-01" max="2017-12-31" value="Fecha - <?php echo $user['date_req'];?>" readonly>
                        </div>
                        <hr>
                        <div class="datos-horario">
                            <div class="hora-inicio">
                                <input class="botons" type="text" id="redondo" value="<?php echo $user['lapse_t'];?>" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="datos-docente">
                            <input type="text" class="form-control" value="Cancelado Por - <?php echo $user['name_can']; ?>" required="" autocomplete="off" type="text" readonly>
                        </div>
                        <hr>
                        <div class="boton-enviar">
                            <button type="submit" class="btn btn-inverse btn-lg btn-block" name="sendCancel" value="Enviar Solicitud">Volver</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

</body>
<?php include_once('footer.php'); ?>

</html>
