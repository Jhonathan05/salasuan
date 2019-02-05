<?php
include_once ('db/dbs_utilities.php');
//session_start();
//include_once ('verify.php');
//$result = run_query();


    //$result = verSolicitudT();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name=”apple-mobile-web-app-capable” content=”yes” />
        <title>Header</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/normalize7.css">
        <link rel="stylesheet" href="css/header.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    </head>
    <header>
        <nav>
            <div id="header-uan">
                <div id="ul-menu">
                    <ul class="header-encabezado">
                        <div class="texto-encabezado">
                            <li>
                                <h1>UAN CALENDARIOS</h1>
                            </li>
                        </div>
                        <li>
                            <!-------------------------------------------------Desplegable------------------------------------------------------------->
                            <div class="desplegable">
                                <input type="checkbox" name="" id="btn-menu">
                                <label for="btn-menu"><i class="fa fa-bars" aria-hidden="true"></i></label>
                                <!--<?php echo $adm['name_ad']; ?>-->
                                <!--nav.menu>ul>li*4>a[#]>{item $}-->
                                <nav class="menu">
                                    <ul>
                                        <?php
                                    if (!isset($_SESSION['uid'])) {
                                        # code...
                                    }else{
                                        if ($_SESSION['uid'] !== '') {
                                            # code...
                                            $adm = obtenerMonitor($_SESSION['uid']);
                                    ?>
                                            <li class="user-fa">
                                                <span class="icono-user"><img src="img/monitor.svg" alt=""></span>
                                                <span><?php echo $adm['name_ad']; ?></span>
                                            </li>
                                            <li class="enlaces"><a href="listams.php">Pendientes</a></li>
                                            <li class="enlaces"><a href="listamc.php">Confirmados</a></li>
                                            <li class="enlaces"><a href="listamcs.php">Cancelados</a></li>
                                            <li class="enlaces enlaces-ultimo"><a href="logout.php">Cerrar Sesi&oacute;n</a></li>
                                            <?php
                                        }
                                    }
                                        ?>
                                                <li id="menuli-asideIzquierda">
                                                    <?php
                                                  require_once('asideIzquierda.php');
                                              ?>
                                                </li>
                                    </ul>
                                    <form name="fSolicitudes" action="listas.php" method="post" id="form-head">
                                        <div class="head-sol">
                                            <p>Mi estado de solicitud</p>
                                            <input type="number" name="doc_est" placeholder="Digitar Documento" required="">
                                            <button type="submit" value="solicitar">Ver Solicitudes</button>
                                        </div>
                                    </form>
                                    <ul>
                                        <li class="enlaces"><a href="request.php">¿Nueva Solicitud?</a></li>
                                        <li class="enlaces"><a href="index.php">Regresar a Inicio</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-------------------------------------------------Desplegable------------------------------------------------------------->
                        </li>
                    </ul>
                </div>
                <?php
                if (!isset($_SESSION['uid'])) {
                    # code...
                }else{
                    if ($_SESSION['uid'] !== '') {
                        # code...
                        $adm = obtenerMonitor($_SESSION['uid']);

                    }
                }
            ?>
            </div>
        </nav>
    </header>

    <body>

    </body>

    </html>
