<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="UAN Calendario">
    <meta name="abstract" content="Calendarios Universidad Antonio Nariño Sede Ibagué">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <!--    <link rel="stylesheet" type="text/css" href="css/styles.css">-->
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
                                        <li class="primer-carta des-movil">
                                            <p class="titulo-carta"><strong>C303</strong></p>
                                            <p class="texto-titulo-carta">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </li>
                                        <li class="item-carta des-movil"><Strong>Capacidad:</Strong> 50</li>
                                        <li class="item-carta des-movil"><strong>Video Beam:</strong> Si</li>
                                        <li class="item-carta des-movil"><strong>Tablero:</strong> Acr&iacute;lico</li>
                                        <li class="item-carta des-movil item-carta-apartar"><strong>Ver Horarios</strong></li>
                                        <div class="arrow-before des-movil"></div><div class="arrow-after des-movil"></div>
                                        <li class="item-carta ultimo-item">
                                            <form name="fSala303" action="303.php" method="post">
                                                <input id="erase" class="boton botonc" name="Sala303" type="submit" value="C303">
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                 <div class="carta">
                                    <ul>
                                        <li class="primer-carta des-movil">
                                            <p class="titulo-carta"><strong>C305</strong></p>
                                            <p class="texto-titulo-carta">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </li>
                                        <li class="item-carta des-movil"><Strong>Capacidad:</Strong> 35</li>
                                        <li class="item-carta des-movil"><strong>Video Beam:</strong> Si</li>
                                        <li class="item-carta des-movil"><strong>Tablero:</strong> Acr&iacute;lico</li>
                                        <li class="item-carta des-movil item-carta-apartar"><strong>Ver Horarios</strong></li>
                                        <div class="arrow-before des-movil"></div><div class="arrow-after des-movil"></div>
                                        <li class="item-carta ultimo-item">
                                            <form name="fSala305" action="305.php" method="post">
                                                <input id="erase" class="boton botonc" name="Sala305" type="submit" value="C305">
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="carta">
                                    <ul>
                                        <li class="primer-carta des-movil">
                                            <p class="titulo-carta"><strong>C306</strong></p>
                                            <p class="texto-titulo-carta">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </li>
                                        <li class="item-carta des-movil"><Strong>Capacidad:</Strong> 20</li>
                                        <li class="item-carta des-movil"><strong>Aire acondicionado:</strong> Si</li>
                                        <li class="item-carta des-movil txt-transparente"><strong>Conexi&oacute;n TV:</strong> No</li>
                                        <li class="item-carta des-movil item-carta-apartar"><strong>Ver Horarios</strong></li>
                                        <div class="arrow-before des-movil"></div><div class="arrow-after des-movil"></div>
                                        <li class="item-carta ultimo-item">
                                            <form name="fSala305" action="306.php" method="post">
                                                <input id="erase" class="boton botonc" name="Sala306" type="submit" value="C306">
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="carta">
                                    <ul>
                                        <li class="primer-carta des-movil">
                                            <p class="titulo-carta"><strong>BIOLOG&Iacute;A</strong></p>
                                            <p class="texto-titulo-carta">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </li>
                                        <li class="item-carta des-movil"><Strong>Capacidad:</Strong> 20</li>
                                        <li class="item-carta des-movil"><strong>Aire acondicionado:</strong> Si</li>
                                        <li class="item-carta des-movil txt-transparente"><strong>Conexi&oacute;n TV:</strong> No</li>
                                        <li class="item-carta des-movil item-carta-apartar"><strong>Ver Horarios</strong></li>
                                        <div class="arrow-before des-movil"></div><div class="arrow-after des-movil"></div>
                                        <li class="item-carta ultimo-item">
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
                                        <li class="primer-carta des-movil">
                                            <p class="titulo-carta"><strong>PRECL&Iacute;NICA</strong></p>
                                            <p class="texto-titulo-carta">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </li>
                                        <li class="item-carta des-movil"><Strong>Capacidad:</Strong> -</li>
                                        <li class="item-carta des-movil txt-transparente"><strong>Equipos de Computo:</strong> 0</li>
                                        <li class="item-carta des-movil item-carta-apartar"><strong>Ver Horarios</strong></li>
                                        <div class="arrow-before des-movil"></div><div class="arrow-after des-movil"></div>
                                        <li class="item-carta ultimo-item">
                                            <form name="fSalaprecli" action="preclinica.php" method="post">
                                                <input id="erase" class="boton botonc" name="Salapre" type="submit" value="Precl&iacute;nica">
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="carta">
                                    <ul>
                                        <li class="primer-carta des-movil">
                                            <p class="titulo-carta"><strong>CL&Iacute;NICA 1</strong></p>
                                            <p class="texto-titulo-carta">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </li>
                                        <li class="item-carta des-movil"><Strong>Capacidad:</Strong> 20</li>
                                        <li class="item-carta des-movil"><strong>Aire acondicionado:</strong> Si</li>
                                        <!--<li class="item-carta des-movil"><strong>Conexi&oacute;n TV:</strong> No</li>-->
                                        <li class="item-carta des-movil item-carta-apartar"><strong>Ver Horarios</strong></li>
                                        <div class="arrow-before des-movil"></div><div class="arrow-after des-movil"></div>
                                        <li class="item-carta ultimo-item">
                                            <form name="fSalacli1" action="clinica1.php" method="post">
                                                <input id="erase" class="boton botonc" name="Salacli1" type="submit" value="Cl&iacute;nica 1">
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="carta">
                                    <ul>
                                        <li class="primer-carta des-movil">
                                            <p class="titulo-carta"><strong>CL&Iacute;NICA 2</strong></p>
                                            <p class="texto-titulo-carta">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </li>
                                        <li class="item-carta des-movil"><Strong>Capacidad:</Strong> 20</li>
                                        <li class="item-carta des-movil"><strong>Aire acondicionado:</strong> Si</li>
                                        <li class="item-carta des-movil item-carta-apartar"><strong>Ver Horarios</strong></li>
                                        <div class="arrow-before des-movil"></div><div class="arrow-after des-movil"></div>
                                        <li class="item-carta ultimo-item">
                                            <form name="fSalacli2" action="clinica2.php" method="post">
                                                <input id="erase" class="boton botonc" name="Salacli2" type="submit" value="Cl&iacute;nica 2">
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div id="importante-home" class="des-movil">
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
