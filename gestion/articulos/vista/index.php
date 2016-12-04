<?php include "tabs.php"; ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de articulos"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=articulos&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> <td>#</td>

            <th><?php echo _t("Id_tipo"); ?></th> 
            <th><?php echo _t("Titulo"); ?></th> 

            <th><?php echo _t("Fecha_registro"); ?></th> 
            <th><?php echo _t("Estatus"); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "articulos", $_usuarios_grupo)) {
            //   include "./articulos/vista/tr_buscar.php";
        }
        ?>


        <?php
        $i = 1;
        while ($articulos = mysql_fetch_array($sql)) {
            include "./articulos/reg/reg.php";
            if (permisos_tiene_permiso("editar", "articulos", $_usuarios_grupo)) {
                include "./articulos/vista/tr.php";
                // include "./articulos/vista/tr_editar.php";
            } else {
                include "./articulos/vista/tr.php";
            }
            $i++;
        }
        ?>
    </tbody>
    <?php
    if (permisos_tiene_permiso("crear", "articulos", $_usuarios_grupo)) {
        //   include "./articulos/vista/tr_anadir.php";
    }
    ?>


</table> 

<?php
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



