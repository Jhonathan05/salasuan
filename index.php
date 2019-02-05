<?php 
include_once ('db/dbs_utilities.php');
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name=”apple-mobile-web-app-capable” content=”yes” />
    <link rel="stylesheet" type="text/css" href="css/stylesIndex.css">
    <link rel="stylesheet" type="text/css" href="css/normalize7.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Universidad Antonio Nariño</title>
</head>

<body>
    <div class="contenido">
        <?php
            if (!isset($_SESSION['uid'])) {
            
            }else{
                if ($_SESSION['uid'] !== '') {
                    # code...
                    $adm = obtenerMonitor($_SESSION['uid']);
                }
        ?>
            <div id="flotante">
                <div id="menu-sesion-index">
                    <ul id="info-monitor-index">
                        <li>
                            <ul id="usuario-desp">
                                <li>
                                    <p>
                                        <?php echo $adm['name_ad']; ?>
                                    </p>
                                </li>
                                <li>
                                    <!--<i class="fa fa-user-circle-o" aria-hidden="true"></i>--><span class="icono-user"><img src="img/monitor.svg" alt=""></span>
                                </li>
                            </ul>
                        </li>
                        <li id="info-monitor-desplegable-index-desaparecer">
                            <ul id="info-monitor-desplegable-index">
                                <li><a href="listams.php">Pendientes</a></li>
                                <li><a href="listamc.php">Confirmados</a></li>
                                <li><a href="listamcs.php">Cancelados</a></li>
                                <li><a href="logout.php">Cerrar Sesi&oacute;n</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="movil">
                    <div class="desplegable-index">
                        <input type="checkbox" name="" id="btn-menu">
                        <label for="btn-menu"><i class="fa fa-bars" aria-hidden="true"></i></label>
                        <nav class="menu" style="top:10%">
                            <ul>
                                <li class="user-fa">
                                    <span class="icono-user"><img src="img/monitor.svg" alt=""></span>
                                    <span><p><?php echo $adm['name_ad']; ?></p></span>
                                </li>
                                <li class="enlaces"><a href="listams.php">Pendientes</a></li>
                                <li class="enlaces"><a href="listamc.php">Confirmados</a></li>
                                <li class="enlaces"><a href="listamcs.php">Cancelados</a></li>
                                <li class="enlaces enlaces-ultimo"><a href="logout.php">Cerrar Sesi&oacute;n</a></li>

                                <li id="menuli-asideIzquierda">
                                    <?php
                                    require_once('asideIzquierda.php');
                                ?>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <?php  } ?>
            <div id="division">
                <div id="imagen">
                    <img src="img/index/princ.png" alt="UAN">
                </div>
                <div id="texto">
                    <div id="contenido-texto">
                        <h1>CENTRO DE COMPUTO</h1>
                    </div>
                    <div id="botones">
                        <input type="button" name="" class="btn-bloque" value="Bloque B" onclick="location='homeb.php'">
                        <input type="button" name="" class="btn-bloque" value="Bloque C" onclick="location='homec.php'">
                    </div>
                    <div id="soli-index">
                        <form name="fSolicitudes" action="listas.php" method="post">
                            <input type="number" name="doc_est" placeholder="N&uacute;mero Documento" required="">
                            <input type="button" value="Estado de Solicitud">
                        </form>
                    </div>

                </div>

            </div>
    </div>    
</body>
<?php require_once('footer.php');?>

</html>
