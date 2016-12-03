<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Carousel Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->



        <link href="carrusel.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
    </head>

    <body>


        <div class="navbar-wrapper">
            <div class="container">
                <?php include "nav_superior.php"; ?>
                
            </div>
        </div>


        
        <?php include "carrusel.php"; ?>
        
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="imagenes/casa1.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Casa Sayani</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-default" href="detalles.php" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                
                
                <div class="col-lg-4">
                    <img class="img-circle" src="imagenes/casa2.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Casa Erika</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                
                
                <div class="col-lg-4">
                    <img class="img-circle" src="imagenes/casa3.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Casa Javier</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                
                
            </div><!-- /.row -->
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="imagenes/gala.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Galapagos</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-default" href="detalles.php" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                
                
                <div class="col-lg-4">
                    <img class="img-circle" src="imagenes/mitad.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Mitad de mundo</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                
                
                <div class="col-lg-4">
                    <img class="img-circle" src="imagenes/quito-p.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Quito</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                
                
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It ll blow your mind.</span></h2>
                    <p class="lead">
                    Ubicado en la entrada del puente nº2 de la autopista vía  a los Chillos, Entrada al centro de revisión vehicular de los Chillos,  Barrio Salvador Celi nº 14, zona atractiva para el turismo con acogedores y pintorescos cafés. Completa privacidad para el huésped, a 15 minutos del centro de Quito, a 1o minutos de valle de los Chillos, circulan 10 lineas de buses y taxis. Ideal para Familias, estudiantes y parejas jóvenes.    
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" 
                         src="imagenes/ubicacion-casa-Quito.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 col-md-push-5">
                    <h2 class="featurette-heading">Oh yeah, it s that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">
                        
                    <h3>Descripción</h3>

    Inmueble: Casa Unifamiliar
    Operación: Alquiler Corta Temporada
    Ambientes: 2
    Antigüedad: Max 10 años
    Baños: 3
    Dormitorios: 3
    Tipo de edificación: Casa
    Area de construcción (m²): 100
    Area de terreno (m²): 100
    Amoblado: Sí
    Estado: Muy bueno
    Garage: Sí
    Capacidad de personas: 6
    Check in: 08:00
    Check out: 11:00
    Número de camas: 3

    <h3>Ambientes</h3>

    Cocina
    Comedor
    Dormitorio (3)
    Escritorio
    Lavandería
    Terraza

    <h3>Comodidades</h3>

    Apto para familias/niños
    Lavadora/Secadora
    Microondas
    Garage de visitas
    Conexión a internet Wifi
    Parrillero/Barbacoa
    Terraza con vistas a la montaña
    Seguridad 24/7

                    
                    </p>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">


            

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

<?php include "footer.php"; ?>