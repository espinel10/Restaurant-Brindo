<?php 

echo $_SESSION['last_time_client']; 
session_name('login');
session_start();
$clientSession = $_SESSION['client'];
    $employeeSession = $_SESSION['employee'];

    echo $clientSession ;

    $lastTimeClient = $_SESSION['last_time_client'];
    $lastTimeEmployee = $_SESSION['last_time_employee'];

    date_default_timezone_set('america/bogota');    
    //SI EXISTE LA SESIÓN Y NO HA EXPIRADO (1 HORA)

    if (isset($clientSession) && !empty($clientSession) && (time() - $lastTimeClient) < (60 * 60))
    {
        // SI INICIÓ SESIÓN DE MANERA CORRECTA
        //PRIMERO ACTUALIZAMOS EL TIEMPO DE EXPIRACIÓN
        $_SESSION['last_time_client'] = time();                    
        header('location:codigoBrindo/viewsBrindo/clients/homeClientBrindo.php');
    } else if(isset($employeeSession) && !empty($employeeSession) && (time() - $lastTimeEmployee) < (60 * 60))
    {
        $_SESSION['last_time_employee'] = time();                    
        header('location:codigoBrindo/viewsBrindo/employees/homeEmployeeBrindo.php');
    }
    // SI NO HA INICIADO SESIÓN MUESTRA EL HTML NORMAL
    ?>


<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="icon" href="datosBrindo/iconosBrindo/iconoBrindo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Para los íconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Para la familia de la fuente -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Anton" />
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <!-- Para el css principal -->
    <link rel="stylesheet" href="codigoBrindo/cssBrindo/plantillaBrindo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Brindo, la página para hacer los pedidos en tu restaurante" />
    <meta name="distribution" content="global" />
    <meta name="Keywords" content="Brindo,Pedidos,Restaurante,Domicilios" />
    <meta name="Robots" content="all" />
    <meta name="author" content="Andrés Felipe Cabeza, Geyner Rojas" />
    <meta name="copyright" content="Andrés Felipe Cabeza" />
    <title>Brindo</title>
</head>

<body id="brindo-song">
    
    <!-- MENÙ-->
    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar navbar-dark brindo-navbar">
            <a href="#" class="navbar-left "><img class="logo" src="datosBrindo/iconosBrindo/iconoAltBrindo.png"></a>
            <a class="navbar-brand" href="#">Brindo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="codigoBrindo/viewsBrindo/curriculumVitaeBrindo.html">Desarrolladores del sitio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="codigoBrindo/viewsBrindo/quizBrindo.html">Encuesta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="codigoBrindo/viewsBrindo/fquestions.html">Preguntas Frecuentes</a>
                    </li>
                </ul>
                <!-- NAV BAR ALINEADO A LA DERECHA -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="codigoBrindo/viewsBrindo/clients/clientLoginBrindo.php">Cliente</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="codigoBrindo/viewsBrindo/employees/employeeLoginBrindo.php">Empleado</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div> 
    <!--Carousel-->  
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-container">
                    <img src="datosBrindo/imagenesBrindo/carousel1Brindo.jpg" alt="Main imagen" width="100%">
                    <!-- Muestra el texto solo en dispositivos grandes, sino sólo la imagen -->
                    <h1 class="main-text d-none d-sm-none d-md-none d-lg-block">
                        <p class="brindo-title">Brindo</p> Comes m&aacute;s y esperas menos
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-container">
                    <img src="datosBrindo/imagenesBrindo/carousel3Brindo.jpg" alt="Tablet image" width="100%">
                    <!-- Muestra el texto solo en dispositivos grandes, sino sólo la imagen  -->
                    <h1 class="main-text-right d-none d-sm-none d-md-none d-lg-block">Realiza f&aacute;cil tus pedidos en nuestra p&aacute;gina web</h1>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-container">
                    <iframe width="100" height="315" src="https://www.youtube.com/embed/SS_m2ejm0Mc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-container">
                    <video src="datosBrindo/videosBrindo/comercialBrindo.mp4" width="100%" controls preload="metadata">
                        <source src="datosBrindo/videosBrindo/comercialBrindo.mp4" type="video/mp4" >
                    </video>
                </div>
            </div>

        </div>



        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    
   
    <div id="containerModalClient" class="container" >      
        
        <a id="buttonModalClient" class="btn btn-info btn-lg" href="codigoBrindo/viewsBrindo/clients/clientLoginBrindo.php">Ordena Ahora!</a>
            

    </div>

    <!-- DISEÑO A 3 COLUMNAS -->
    <div class="why-us">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <!-- Muestra el ícono x5 solo en dispositivos grandes, sino en x3 -->
                    <i class="fa fa-clock-o fa-3x card-img-top why-us-header-icon d-none d-sm-none d-md-block d-lg-block" aria-hidden="true"></i>
                    <i class="fa fa-clock-o fa-2x card-img-top why-us-header-icon .d-block .d-sm-none d-md-none" aria-hidden="true"></i>
                    <div class="card-body">
                        <h3 class="card-title d-none d-sm-none d-md-block d-lg-block">Servicio r&aacute;pido</h3>
                        <p class="card-text d-none d-sm-none d-md-none d-lg-block">Con nuestros pedidos automatizados, vamos a entregar tus pedidos en tiempo r&eacute;cord </p>
                        <!-- Sólo para dispositivos pequeños -->
                        <h6 class="d-block d-sm-none small-devices-description">Rápidez</h6>

                    </div>
                </div>
                <div class="best-service-card">

                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <!-- Muestra el ícono x5 solo en dispositivos grandes, sino en x3 -->
                    <i class="fa fa-cutlery fa-3x card-img-top why-us-header-icon d-none d-sm-none d-md-block d-lg-block" aria-hidden="true"></i>
                    <i class="fa fa-cutlery fa-2x card-img-top why-us-header-icon .d-block .d-sm-none d-md-none" aria-hidden="true"></i>
                    <div class="card-body">
                        <h3 class="card-title d-none d-sm-none d-md-block d-lg-block ">Variedad de productos</h3>
                        <p class="card-text d-none d-sm-none d-md-none d-lg-block">Hamburguesas, perros calientes, acompañantes, bebidas, carnes y mucho m&aacute;s </p>
                        <!-- Sólo para dispositivos pequeños -->
                        <h6 class="d-block d-sm-none small-devices-description">Variedad</h6>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <i class="fa fa-check-circle-o fa-3x card-img-top why-us-header-icon d-none d-sm-none d-md-block d-lg-block" aria-hidden="true"></i>
                    <i class="fa fa-check-circle-o fa-2x card-img-top why-us-header-icon .d-block .d-sm-none d-md-none" aria-hidden="true"></i>
                    <div class="card-body">
                        <h3 class="card-title d-none d-sm-none d-md-block d-lg-block">Con todas las medidas</h3>
                        <p class="card-text d-none d-sm-none d-md-none d-lg-block">Nos preocupamos por tu seguridad, por eso siempre garantizamos calidad en nuestro servicio</p>
                        <!-- Sólo para dispositivos pequeños -->
                        <h6 class="d-block d-sm-none small-devices-description">Seguridad</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery para las animaciones de la página -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
    <!-- ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="codigoBrindo/jqueryBrindo/animacionesBrindo.js"></script>
    <script src="codigoBrindo/jsBrindo/cargarAudioBrindo.js"></script>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    Cabeza Serrano Andres Felipe
                    <a href="https://www.github.com/felipecabeza16" class="nav-link" target="_blank"><i
                            class="fa fa-github fa-lg"></i></a>
                </div>
                <div class="col-sm">
                    Rojas Torres Geyner Felipe
                    <a href="https://www.instagram.com/geynerrt" class="nav-link" target="_blank"><i
                            class="fa fa-instagram fa-lg"></i></a>
                </div>
                <div class="col-sm">
                    Jaimes Teheran Jorge Alfredo
                    <a href="https://www.github.com/jhosgun" class="nav-link" target="_blank"><i
                            class="fa fa-github fa-lg"></i></a>
                </div>
                <div class="col-sm">
                    Espinel Alejandro José
                    <a href="https://www.github.com/espinel10" class="nav-link" target="_blank"><i
                            class="fa fa-github fa-lg"></i></a>
                </div>
            </div>
        </div>

    </footer>

</body>

</html>
