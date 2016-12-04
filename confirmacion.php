<?php 
include "header.php";
?>
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



        <?php //include "carrusel.php"; ?>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <h1>Casa Javier</h1>


            




            

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Detalles de la reserva</h2>





                    <ul class="list-group">
                        <li class="list-group-item"><span class="glyphicon glyphicon-calendar"></span> <b>Fecha de llegada: </b>12 feb 2016</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-calendar"></span> Fecha de salida: 15 feb 2016</li>
                        <li class="list-group-item">Total de noches: 3</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-usd"></span> Precio por noche: <b>10 </b></li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-user"></span> Huespedes: 5</li>
                        <li class="list-group-item"><span class="glyphicon glyphicon-usd"></span> Total a pagar: 150,00</li>
                    </ul>


                    <h2>Continuar con la reserva</h2>


                    <form>
                        
                        <div class="form-group">
                            <label for="nombres"><?php _t("Nombres"); ?></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        
                        <div class="form-group">
                            <label for="nombres"><?php _t("Apelidos"); ?></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?php _t("Telefono"); ?></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1"><?php _t("Email"); ?></label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <?php _t("Acepto las condiciones de venta"); ?>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>







                    







                </div>
                <div class="col-md-5">

                    
                </div>
            </div>




            <hr class="featurette-divider">


            

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->






            <?php
            /* <!-- Large modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
              <?php
              include "./galeria.php";
              ?>
              </div>
              </div>
              </div> */
            ?>



            <?php include "footer.php"; ?>