<?php 
include_once('db/dbs_utilities.php');
session_start();
//$result = run_query();
//$user = $result->fetch_assoc();
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
    <link rel="stylesheet" type="text/css" href="css/stylesRequest.css">
    <link rel="stylesheet" type="text/css" href="css/normalize7.css">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
    <title>SOLICITUD</title>
</head>
<?php include_once('header.php'); ?>

<body>
    <div class="contenido-request">
        <div class="titulo">
            <h1>Formulario de Solicitud</h1>
            <hr>
        </div>
        <div class="formulario">
            <form name="fRequest" action="process.php" method="POST">
                <h2>Datos del Estudiante</h2>
                <hr>
                <div class="linea-datos">
                    <h3 class="desaparece-r">Documento</h3>
                    <input class="input-r" name="doc_est" placeholder="Documento" type="number">
                </div>
                <div class="linea-datos">
                    <h3 class="desaparece-r">Nombre Completo</h3>
                    <input class="input-r" name="name_est" type="text" placeholder="Nombre Completo" required="" type="text" name="">
                </div>
                <h2>Datos del Sal&oacute;n</h2>
                <hr>
                <div class="linea-datos">
                    <h3 class="desaparece-r">Sal&oacute;n</h3>
                    <select name="home_room" class="input-r" required="">
				            <option value="">Seleccione Sal&oacute;n</option>
                            <?php 
                                include_once('blockb.php');
                                include_once('blockc.php');
                            ?>
			         </select>
                </div>
                <div class="linea-datos">
                    <h3 class="desaparece-r">Nombre del Docente</h3>
                    <input class="input-r" type="text" name="teach" placeholder="Nombre Docente" required="" autocomplete="off">
                </div>
                <div class="linea-datos">
                    <h3>Dia a separar</h3>
                    <input class="input-r" type="date" name="date_req" required="" step="1" min="2019-01-04" max="2019-06-04" value="<?php echo date(" Y-m-d ");?>">
                </div>
                <div class="linea-datos">
                    <h3>Hora Inicio</h3>
                    <input class="input-r" type="time" name="startTime" value="06:00:00" max="21:30:00" min="06:00:00" step="1" id="redondo">
                </div>
                <div class="linea-datos">
                    <h3>Hora Fin</h3>
                    <input class="input-r" type="time" name="finalTime" value="07:00:00" max="22:00:01" min="07:00:00" step="1" id="redondo">
                </div>
                <div class="boton-enviar">
                    <button type="submit" class="boton-r" name="sendReq" value="Enviar Solicitud">Enviar Solicitud</button>
                </div>
            </form>
        </div>

    </div>
    <br><br><br><br><br>
</body>
<?php include_once('footer.php'); ?>

</html>
