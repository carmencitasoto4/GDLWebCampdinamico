<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <script src="https://kit.fontawesome.com/615b74d99c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/normalize.css">

    <?php 
    $archivo=basename($_SERVER['PHP_SELF']);
    $pagina=str_replace(".php","", $archivo);
    if($pagina =='invitados' || $pagina =='index' ){
echo '<link rel="stylesheet" href="css/colorbox.css">';
    }
    else if($pagina=="conferencias"){
        echo '<link rel="stylesheet" href="css/lightbox.css">';
    }
        
    ?>
  

    
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <meta name="theme-color" content="#fafafa">
</head>

<body>

    <!-- Add your site or application content here -->
    <header class="site-header">
        <div class="hero">

            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-pinterest-p"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>

                </nav>
                <div class="texto-header">
                    <div class="info-evento">
                        <p class="fecha no-margin"> <i class="far fa-calendar-alt"></i>10-12 Diciembre</p>
                        <p class="ciudad no-margin"> <i class="fas fa-map-marker-alt"></i>Catamarca, AR</p>
                    </div>

                    <h1 class="nombre-sitio">GDLWebCamp</h1>
                    <p class="slogan">La mejor conferencia de <span>Diseño Web</span></p>

                </div>
            </div>

        </div>


    </header>

    <div class="barra">
        <div class="contenedor">
            <div class="contenido-barra">
                <div class="logo">
                    <a href="index.php">
                    <img src="img/logo.svg" alt="">
                    </a>
                </div>

                <div class="mobile-menu">
                    <a href="">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>

                <div class="navegacion-principal">
                    <a href="conferencias.php">Conferencia</a>
                    <a href="calendario.php"> Calendario</a>
                    <a href="invitados.php"> Invitado</a>
                    <a href="registro.php"> Reservaciones</a>
                </div>
            </div>
        </div>




    </div>