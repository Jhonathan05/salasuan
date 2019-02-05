<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="UAN Calendario">
    <meta name="abstract" content="Calendarios Universidad Antonio Nariño Sede Ibagué">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/normalize7.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!------------------Font Awesome------------------>
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <div class="container">


        <div class="caja">
            <form name="logIn" action="vs.php" method="post">
                <h1>Iniciar Sesi&oacute;n</h1>
                <!--<p>Ingrese Usuario</p>-->

                <div class="form-container-username">
                    <input name="username" type="text" placeholder="Username" aria-describedby="basic-addon1">
                </div>
                <!--<p>Contraseña</p>-->
                <div class="form-container-pass">
                    <input name="password" type="password" placeholder="Contraseña" aria-describedby="basic-addon1">
                </div>

                <div class="boton-iniciar">
                    <button type="submit" class="">Iniciar Sesi&oacute;n</button>
                </div>                                
            </form>
            <div>
               <ul id="ul-login">
                   <li><a href="mailto:monitor.ibague@uan.edu.co">¿No puede iniciar Sesi&oacute;n?</a></li>
                   <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="label-menu"></span></a></li>
               </ul>                
            </div>
        </div>
    </div>

</body>

</html>
