<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <?php
        require_once('recursivo/header_salas.php')
    ?>
        <title>UAN - Clinica 2</title>
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
                    <div class="siguiente">
                        <a href="clinica1.php" class="a_siguiente">
                            <div class="boton_mover">
                                <h3>Anterior Sala</h3>
                            </div>
                        </a>

                        <div class="nombre_salas">
                            <h3>Clinica 2</h3>
                        </div>
                        <a href="303.php" class="a_siguiente">
                            <div class="boton_mover">
                                <h3>Siguiente Sala</h3>
                            </div>
                        </a>
                    </div>
                    <div class="contenedorIframe">
                        <iframe src="https://calendar.google.com/calendar/embed?title=Clinica%202&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=uan.edu.co_eo6qjr1hrkpl9nmj1hs8csjg3k%40group.calendar.google.com&amp;color=%236E6E41&amp;ctz=America%2FBogota" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
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