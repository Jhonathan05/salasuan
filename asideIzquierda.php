<?php include_once ('db/dbs_utilities.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/asideIzquierda.css">
</head>

<body>
    <div class="asideIzquierda">
     
     <div class="des-movil">
          <a href="index.php"><div id="logo-iz">
          <img src="img/logoBlanco.png" alt="Logo Universidad">
      </div></a>
      <?php
            if (!isset($_SESSION['uid'])) {
      ?>
        <div id="usuario-iz">
          <img src="img/monitor.svg" alt="Avatar Monitor Con sesion iniciada">
          <p>¡Hola!</p>
          <form name="fsession" action="login.php" method="post">
            <input id="btn-se-iz" type="submit" name="btn-sesion" value="Iniciar">
          </form>          
        </div>
        <div>
            <form name="fSolicitudes" action="listas.php" method="post">
                <div class="solicitud-2">
                    <p id="titulo-solicitud">Mi estado de solicitud</p>
                    <span class="formli"><input id="input-solicitar" type="number" name="doc_est" placeholder="Digitar Documento" required=""></span>
                    <span class="formli"><button id="boton-enviarSolicitud" type="submit" value="solicitar">Ver Solicitudes</button></span>
                    <a href="request.php" id="request-label">¿Nueva Solicitud?</a>
                </div>
            </form>
        </div>
      <?php 
            }else{
                if ($_SESSION['uid'] !== '') {
                    # code...
                    $adm = obtenerMonitor($_SESSION['uid']);
                }
        ?>
      <div id="usuario-iz">
          <img src="img/monitor.svg" alt="Avatar Monitor Con sesion iniciada">
          <P> <?php echo $adm['name_ad'];?></P>
          <form name="flogout" action="logout.php" method="post">
            <input id="btn-se-iz-online" type="submit" name="btn-sesion" value="En linea">
          </form>          
          <!-------------------------------NUEVO------------------------------------->
                <nav>
                    <ul class="usuario-iz-nav">
                        <li><a href="listams.php"><i class="fa fa-list-alt ico-pad" aria-hidden="true"></i>Pendientes</a></li>
                        <li><a href="listamc.php"><i class="fa fa-check ico-pad" aria-hidden="true"></i>Confirmados</a></li>
                        <li><a href="listamcs.php"><i class="fa fa-ban ico-pad" aria-hidden="true"></i>Cancelados</a></li>
                        <li><a href="logout.php"><i class="fa fa-external-link-square ico-pad" aria-hidden="true"></i>Cerrar Sesi&oacute;n</a></li>
                    </ul>
                </nav>
                <!-------------------------------NUEVO------------------------------------->
      </div>
      <div>
          <form name="fSolicitudes" action="listas.php" method="post">
              <div class="solicitud">
                  <p id="titulo-solicitud">Mi estado de solicitud</p>
                  <span class="formli"><input id="input-solicitar" type="number" name="doc_est" placeholder="Digitar Documento" required=""></span>
                  <span class="formli"><button id="boton-enviarSolicitud" type="submit" value="solicitar">Ver Solicitudes</button></span>
                  <a href="request.php" id="request-label">¿Nueva Solicitud?</a>
             </div>
          </form>
        </div>
            <?php } ?>
     </div>
    </div>

</body>

</html>
