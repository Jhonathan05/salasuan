<?php 
include_once ('db/dbs_utilities.php');
session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="UAN Calendario">
    <meta name="abstract" content="Calendarios Universidad Antonio Nariño Sede Ibagué">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/homeb.css">
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
                    <div class="cartas-derecha-1">
                        <div class="carta">
                            <ul>
                                <li class="primer-carta">
                                    <p class="titulo-carta"><strong><a href="201.php">B201</a></strong></p>
                                    <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </li>
                                <li class="item-carta">
                                    <Strong>Capacidad:</Strong> 18</li>
                                <li class="item-carta"><strong>Equipos de Computo:</strong> 13</li>
                                <li class="item-carta"><strong>Aire acondicionado:</strong> Si</li>
                                <li class="item-carta"><strong>Conexi&oacute;n TV:</strong> HDMI x1</li>
                                <li class="item-carta"><strong>Tablero:</strong> Acr&iacute;lico, Tiza</li>
                                <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                                <div class="arrow-before des-movil"></div>
                                <div class="arrow-after des-movil"></div>
                                <li class="item-carta ultimo-item des-movil">
                                    <form name="fSala201" action="201.php" method="post">
                                        <input class="boton movil" name="Sala201" type="submit" value="B201">
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="carta">
                            <ul>
                                <li class="primer-carta">
                                    <p class="titulo-carta"><strong><a href="202.php">B202</a></strong></p>
                                    <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </li>
                                <li class="item-carta">
                                    <Strong>Capacidad:</Strong> 50</li>
                                <li class="item-carta"><strong>Tablero:</strong> Acr&iacute;lico, Tiza</li>
                                <li class="item-carta"><strong>Conexi&oacute;n TV:</strong> HDMI x1</li>
                                <li class="item-carta"><strong>Aire acondicionado:</strong> Si</li>
                                <li class="item-carta txt-transparente"><strong>Aire acondicionado:</strong> Si</li>
                                <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                                <div class="arrow-before des-movil"></div>
                                <div class="arrow-after des-movil"></div>
                                <li class="item-carta ultimo-item des-movil">
                                    <form name="fSala202" action="202.php" method="post">
                                        <input class="boton" name="Sala202" type="submit" value="B202">
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="carta">
                            <ul>
                                <li class="primer-carta">
                                    <p class="titulo-carta"><strong><a href="203.php">B203</a></strong></p>
                                    <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </li>
                                <li class="item-carta">
                                    <Strong>Capacidad:</Strong> 20</li>
                                <li class="item-carta"><strong>Equipos de Computo:</strong> 13</li>
                                <li class="item-carta"><strong>Conexi&oacute;n TV:</strong> HDMI x1</li>
                                <li class="item-carta"><strong>Tablero:</strong> Acr&iacute;lico, Tiza</li>
                                <li class="item-carta txt-transparente des-movil"><strong>Video Beam:</strong> No</li>
                                <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                                <div class="arrow-before des-movil"></div>
                                <div class="arrow-after des-movil"></div>
                                <li class="item-carta ultimo-item des-movil">
                                    <form name="fSala203" action="203.php" method="post">
                                        <input class="boton" name="Sala203" type="submit" value="B203">
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="carta">
                            <ul>
                                <li class="primer-carta">
                                    <p class="titulo-carta"><strong><a href="204.php">B204</a></strong></p>
                                    <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </li>
                                <li class="item-carta">
                                    <Strong>Capacidad:</Strong> 50</li>
                                <li class="item-carta"><strong>Conexi&oacute;n TV:</strong> HDMI</li>
                                <li class="item-carta"><strong>Tablero:</strong> Acr&iacute;lico, Tiza</li>
                                <li class="item-carta txt-transparente"><strong>Video Beam:</strong> No</li>
                                <li class="item-carta txt-transparente des-movil"><strong>Video Beam:</strong> No</li>
                                <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                                <div class="arrow-before des-movil"></div>
                                <div class="arrow-after des-movil"></div>
                                <li class="item-carta ultimo-item des-movil">
                                    <form name="fSala204" action="204.php" method="post">
                                        <input class="boton" name="Sala204" type="submit" value="B204">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cartas-derecha-1">

                        <div class="carta">
                            <ul>
                                <li class="primer-carta">
                                    <p class="titulo-carta"><strong><a href="206.php">B206</a></strong></p>
                                    <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </li>
                                <li class="item-carta">
                                    <Strong>Capacidad:</Strong> 35</li>
                                <li class="item-carta"><strong>Conexi&oacute;n TV:</strong> HDMI</li>
                                <li class="item-carta"><strong>Tablero:</strong> Acr&iacute;lico, Tiza</li>
                                <li class="item-carta txt-transparente des-movil"><strong>Tablero:</strong> Acr&iacute;lico, Tiza</li>
                                <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                                <div class="arrow-before des-movil"></div>
                                <div class="arrow-after des-movil"></div>
                                <li class="item-carta ultimo-item des-movil">
                                    <form name="fSala206" action="206.php" method="post">
                                        <input class="boton" name="Sala206" type="submit" value="B206">
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="carta">
                            <ul>
                                <li class="primer-carta ">
                                    <p class="titulo-carta"><strong><a href="207.php">B207</a></strong></p>
                                    <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </li>
                                <li class="item-carta ">
                                    <Strong>Capacidad:</Strong> 18</li>
                                <li class="item-carta "><strong>Equipos de Computo:</strong> 11</li>
                                <li class="item-carta "><strong>Tablero:</strong> Acr&iacute;lico, Tiza</li>
                                <li class="item-carta txt-transparente des-movil"><strong>Tablero:</strong> Acr&iacute;lico, Tiza</li>
                                <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                                <div class="arrow-before des-movil"></div>
                                <div class="arrow-after des-movil"></div>
                                <li class="item-carta ultimo-item des-movil">
                                    <form name="fSala207" action="207.php" method="post">
                                        <input class="boton" name="Sala207" type="submit" value="B207">
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="carta">
                            <ul>
                                <li class="primer-carta">
                                    <p class="titulo-carta"><strong><a href="208.php">B208</a></strong></p>
                                    <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </li>
                                <li class="item-carta">
                                    <Strong>Capacidad:</Strong> 35</li>
                                <li class="item-carta"><strong>Aire acondicionado:</strong> Si</li>
                                <li class="item-carta"><strong>Conexi&oacute;n TV:</strong> HDMI</li>
                                <li class="item-carta"><strong>Tablero:</strong> Acr&iacute;lico, Tiza</li>
                                <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                                <div class="arrow-before des-movil"></div>
                                <div class="arrow-after des-movil"></div>
                                <li class="item-carta ultimo-item des-movil">
                                    <form name="fSala208" action="208.php" method="post">
                                        <input class="boton" name="Sala208" type="submit" value="B208">
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div id="importante-home">
                            <h3>IMPORTANTE</h3>
                            <p>Verifica si las salas están disponibles, en caso de que lo esté, se puede solicitar. Para cualquier informaci&oacute;n realizarla via email haciendo clic en: <a href="mailto:monitor.ibague@uan.edu.co">monitor.ibague@uan.edu.co</a>, o directamente con el monitor de turno</p>
                        </div>
                    </div>
                    <div class="cartas-derecha-1">
                        <div class="carta">
                            <ul>
                                <li class="primer-carta">
                                    <p class="titulo-carta"><strong><a href="209.php">B209</a></strong></p>
                                    <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </li>
                                <li class="item-carta">
                                    <Strong>Capacidad:</Strong> 18</li>
                                <li class="item-carta"><strong>Equipos de Computo:</strong> 13</li>
                                <li class="item-carta"><strong>Conexi&oacute;n TV:</strong> HDMI</li>
                                <li class="item-carta"><strong>Tablero:</strong> Acr&iacute;lico, Tiza</li>
                                <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                                <div class="arrow-before des-movil"></div>
                                <div class="arrow-after des-movil"></div>
                                <li class="item-carta ultimo-item des-movil">
                                    <form name="fSala209" action="209.php" method="post">
                                        <input class="boton" name="Sala209" type="submit" value="B209">
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="carta">
                            <ul>
                                <li class="primer-carta">
                                    <p class="titulo-carta"><strong><a href="301.php">B301</a></strong></p>
                                    <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </li>
                                <li class="item-carta">
                                    <Strong>Capacidad:</Strong> 35</li>
                                <li class="item-carta"><strong>Conexi&oacute;n TV:</strong> VGA, HDMI</li>
                                <li class="item-carta"><strong>Tablero:</strong> Acr&iacute;lico, Tiza</li>
                                <li class="item-carta txt-transparente"><strong>Video Beam:</strong> No</li>
                                <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                                <div class="arrow-before des-movil"></div>
                                <div class="arrow-after des-movil"></div>
                                <li class="item-carta ultimo-item des-movil">
                                    <form name="fSala301" action="301.php" method="post">
                                        <input class="boton" name="Sala301" type="submit" value="B301">
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="carta">
                            <ul>
                                <li class="primer-carta">
                                    <p class="titulo-carta"><strong><a href="302.php">B302</a></strong></p>
                                    <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </li>
                                <li class="item-carta">
                                    <Strong>Capacidad:</Strong> 30</li>
                                <li class="item-carta"><strong>Conexi&oacute;n TV:</strong> VGA, HDMI</li>
                                <li class="item-carta"><strong>Tablero:</strong> Acr&iacute;lico, Tiza</li>
                                <li class="item-carta txt-transparente des-movil"><strong>Video Beam:</strong> No</li>
                                <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                                <div class="arrow-before des-movil"></div>
                                <div class="arrow-after des-movil"></div>
                                <li class="item-carta ultimo-item des-movil">
                                    <form name="fSala302" action="302.php" method="post">
                                        <input class="boton" name="Sala302" type="submit" value="B302">
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="carta">
                            <ul>
                                <li class="primer-carta">
                                    <p class="titulo-carta"><strong><a href="auditorio.php">AUDITORIO</a></strong></p>
                                    <p class="texto-titulo-carta des-movil">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </li>
                                <li class="item-carta">
                                    <Strong>Capacidad:</Strong> 300</li>
                                <li class="item-carta"><strong>Video Beam:</strong> Si</li>
                                <li class="item-carta"><strong>Accesorio:</strong> Micr&oacute;fono, Cabina x4, Planta</li>
                                <li class="item-carta txt-transparente des-movil"><strong>Video Beam:</strong> No</li>
                                <li class="item-carta item-carta-apartar des-movil"><strong>Ver Horarios</strong></li>
                                <div class="arrow-before des-movil"></div>
                                <div class="arrow-after des-movil"></div>
                                <li class="item-carta ultimo-item des-movil">
                                    <form name="fAuditorio" action="auditorio.php" method="post">
                                        <input class="boton" name="auditorio" type="submit" value="Auditorio">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="des-movil">
                        <?php
                            require_once('footer2.php');
                            ?>
                    </div>
                </div>
        </div>
    </body>
    <div id="footer1">
        <?php
            require_once('footer.php');
        ?>
    </div>

</html>
