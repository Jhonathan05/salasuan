<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="UAN Calendario">
    <meta name="abstract" content="Calendarios Universidad Antonio Nariño Sede Ibagué">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/bloquec.css">
    <link rel="stylesheet" type="text/css" href="css/normalize7.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Universidad Antonio Nariño</title>
</head>
<?php
    require_once('header.php');
    ?>

<body>
    <div class="contenido">
        <?php
                require('asideIzquierda.php');
            ?>
        <div class="asideDerecha">
            <div class="btns-derecha">
                <div class="carta">
                    <ul>
                        <li class="primer-carta">
                            <p class="titulo-carta"><strong><a href="303.php">C303</a></strong></p>
                            <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </li>
                        <li class="item-carta"><Strong>Capacidad:</Strong> 50</li>
                        <li class="item-carta"><strong>Video Beam:</strong> Si</li>
                        <li class="item-carta"><strong>Tablero:</strong> Acr&iacute;lico</li>
                        <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                        <div class="arrow-before des-movil"></div>
                        <div class="arrow-after des-movil"></div>
                        <li class="item-carta ultimo-item des-movil">
                            <form name="fSala303" action="303.php" method="post">
                                <input id="erase" class="boton botonc" name="Sala303" type="submit" value="C303">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="carta">
                    <ul>
                        <li class="primer-carta">
                            <p class="titulo-carta"><strong><a href="305.php">C305</a></strong></p>
                            <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </li>
                        <li class="item-carta"><Strong>Capacidad:</Strong> 35</li>
                        <li class="item-carta"><strong>Video Beam:</strong> Si</li>
                        <li class="item-carta"><strong>Tablero:</strong> Acr&iacute;lico</li>
                        <li class="item-carta des-movil item-carta-apartar"><strong>Ver Horarios</strong></li>
                        <div class="arrow-before des-movil"></div>
                        <div class="arrow-after des-movil"></div>
                        <li class="item-carta ultimo-item des-movil">
                            <form name="fSala305" action="305.php" method="post">
                                <input id="erase" class="boton botonc" name="Sala305" type="submit" value="C305">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="carta">
                    <ul>
                        <li class="primer-carta">
                            <p class="titulo-carta"><strong><a href="306.php">C306</a></strong></p>
                            <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </li>
                        <li class="item-carta"><Strong>Capacidad:</Strong> 20</li>
                        <li class="item-carta"><strong>Aire acondicionado:</strong> Si</li>
                        <li class="item-carta txt-transparente"><strong>Conexi&oacute;n TV:</strong> No</li>
                        <li class="item-carta des-movil item-carta-apartar"><strong>Ver Horarios</strong></li>
                        <div class="arrow-before des-movil"></div>
                        <div class="arrow-after des-movil"></div>
                        <li class="item-carta ultimo-item des-movil">
                            <form name="fSala305" action="306.php" method="post">
                                <input id="erase" class="boton botonc" name="Sala306" type="submit" value="C306">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="carta">
                    <ul>
                        <li class="primer-carta">
                            <p class="titulo-carta"><strong><a href="bio.php">BIOLOG&Iacute;A</a></strong></p>
                            <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </li>
                        <li class="item-carta"><Strong>Capacidad:</Strong> 20</li>
                        <li class="item-carta"><strong>Aire acondicionado:</strong> Si</li>
                        <li class="item-carta txt-transparente"><strong>Conexi&oacute;n TV:</strong> No</li>
                        <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                        <div class="arrow-before des-movil"></div>
                        <div class="arrow-after des-movil"></div>
                        <li class="item-carta ultimo-item des-movil">
                            <form name="fSalabio" action="bio.php" method="post">
                                <input id="erase" class="boton botonc" name="Salabio" type="submit" value="Biolog&iacute;a">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="btns-derecha2">
                <div class="carta">
                    <ul>
                        <li class="primer-carta">
                            <p class="titulo-carta"><strong><a href="preclinica.php">PRECL&Iacute;NICA</a></strong></p>
                            <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </li>
                        <li class="item-carta"><Strong>Capacidad:</Strong> -</li>
                        <li class="item-carta txt-transparente"><strong>Equipos de Computo:</strong> 0</li>
                        <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                        <div class="arrow-before des-movil"></div>
                        <div class="arrow-after des-movil"></div>
                        <li class="item-carta ultimo-item des-movil">
                            <form name="fSalaprecli" action="preclinica.php" method="post">
                                <input id="erase" class="boton botonc" name="Salapre" type="submit" value="Precl&iacute;nica">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="carta">
                    <ul>
                        <li class="primer-carta">
                            <p class="titulo-carta"><strong><a href="clinica1.php">CL&Iacute;NICA 1</a></strong></p>
                            <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </li>
                        <li class="item-carta"><Strong>Capacidad:</Strong> 20</li>
                        <li class="item-carta"><strong>Aire acondicionado:</strong> Si</li>
                        <!--<li class="item-carta des-movil"><strong>Conexi&oacute;n TV:</strong> No</li>-->
                        <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                        <div class="arrow-before des-movil"></div>
                        <div class="arrow-after des-movil"></div>
                        <li class="item-carta ultimo-item des-movil">
                            <form name="fSalacli1" action="clinica1.php" method="post">
                                <input id="erase" class="boton botonc" name="Salacli1" type="submit" value="Cl&iacute;nica 1">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="carta">
                    <ul>
                        <li class="primer-carta">
                            <p class="titulo-carta"><strong><a href="clinica2.php">CL&Iacute;NICA 2</a></strong></p>
                            <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </li>
                        <li class="item-carta"><Strong>Capacidad:</Strong> 20</li>
                        <li class="item-carta"><strong>Aire acondicionado:</strong> Si</li>
                        <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                        <div class="arrow-before des-movil"></div>
                        <div class="arrow-after des-movil"></div>
                        <li class="item-carta ultimo-item des-movil">
                            <form name="fSalacli2" action="clinica2.php" method="post">
                                <input id="erase" class="boton botonc" name="Salacli2" type="submit" value="Cl&iacute;nica 2">
                            </form>
                        </li>
                    </ul>
                </div>
                <div id="importante-home">
                    <h3>IMPORTANTE</h3>
                    <p>Verifica si las salas están disponibles, en caso de que lo esté, se puede solicitar. Para cualquier informaci&oacute;n realizarla via email haciendo clic en: <a href="mailto:monitor.ibague@uan.edu.co">monitor.ibague@uan.edu.co</a>, o directamente con la auxiliar de turno</p>
                </div>
            </div>
            <div class="des-movil">
                <?php
                            require_once('footer2.php');
                            ?>
            </div>
        </div>

    </div>
    <div id="footer1">
        <?php
            require_once('footer.php');
        ?>
    </div>


</body>


</html>
