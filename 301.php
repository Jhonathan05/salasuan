<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <?php
        require_once('recursivo/header_salas.php')
    ?>
        <title>UAN - 301</title>
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
                        <a href="209.php" class="a_siguiente">
                            <div class="boton_mover">
                                <h3>Anterior Sala</h3>
                            </div>
                        </a>

                        <div class="nombre_salas">
                            <h3>Sala 301</h3>
                        </div>
                        <a href="302.php" class="a_siguiente">
                            <div class="boton_mover">
                                <h3>Siguiente Sala</h3>
                            </div>
                        </a>
                    </div>
                    <div class="contenedorIframe">
                        <iframe src="https://calendar.google.com/calendar/embed?title=Sala%20301%20-%20Audiovisuales&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=uan.edu.co_p5sb4j8a0nlsvqvjubm6p55tik%40group.calendar.google.com&amp;color=%230bc9fb&amp;ctz=America%2FBogota" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
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
