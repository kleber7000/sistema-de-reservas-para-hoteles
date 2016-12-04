<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo "$config_nombre_web"; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><?php _t("Ubicacion"); ?></a></li>                
                <li><a href="#"><?php _t("Galeria fotos"); ?></a></li>
                <li><a href="#"><?php _t("Reservas"); ?></a></li>
                <li><a href="#"><?php _t("Contacto"); ?></a></li>

                <?php //echo _menu_top('publico_superior'); ?>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" 
                       data-toggle="dropdown" 
                       role="button" aria-haspopup="true" 
                       aria-expanded="false"><?php _t("Servicios"); ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="pagina.php"><?php _t("Alquiler auto"); ?></a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header"><?php _t("Guias"); ?></li>
                        <li><a href="pagina.php"><?php _t("Galapagos"); ?></a></li>
                        <li><a href="pagina.php"><?php _t("Mitad del mundo"); ?></a></li>
                        <li><a href="pagina.php"><?php _t("Loja"); ?></a></li>

                    </ul>
                </li>
            </ul>

            <form method="post" action="gestion/z_login.php" class="navbar-form navbar-right">
                <input type="text" name="username" id="username" class="form-control" placeholder="Login" autofocus>
                <input type="password" name="password" id="password" class="form-control" placeholder="Clave">
                <button type="submit" class="btn btn-danger">Entrar</button>
            </form>



        </div>
    </div>
</nav>
