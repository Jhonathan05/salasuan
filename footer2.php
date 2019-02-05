<?php include_once ('db/dbs_utilities.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Footer</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/normalize7.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
</body>
<footer class="footer2-contenido">
    <div>
        <ul class="footer-nombres2">
            <li>Back-End: Diego Nieto. Front-End: Jhonathan Camargo.</li>
            <li>© 2018 by Centro De Computo - Sede Ibagué</li>
        </ul>
        <ul id="menu1">
            <!--<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="label-menu">Inicio</span></a></li>
            <li><a href="https://mail.google.com/" target=_blank><i class="fa fa-envelope-o" aria-hidden="true"></i><span class="label-menu">Correo</span></a></li>  -->
            <?php 
                if (isset($_SESSION['uid'])) {
                    # code...
            ?>
            <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="label-menu">Sesi&oacute;n</span></a></li>
            <?php 
                }else{
            ?>
            <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i><span class="label-menu">Sesi&oacute;n</span></a></li>
            <?php 
                }
             ?>
        </ul>
    </div>
</footer>

</html>
