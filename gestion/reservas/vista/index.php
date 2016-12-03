<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Lista de reservas"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=reservas&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> <td>#</td>

 <th><span class="glyphicon glyphicon-home"></span> <?php echo _t("Casa"); ?></th> 
 <th><span class="glyphicon glyphicon-user"></span> <?php echo _t("Contacto"); ?></th> 
 <th><span class="glyphicon glyphicon-calendar"></span> <?php echo _t("Fecha E"); ?></th> 
 <th><span class="glyphicon glyphicon-calendar"></span> <?php echo _t("Fecha S"); ?></th> 
 <th><span class="glyphicon glyphicon-user"></span> <?php echo _t("Pax"); ?></th> 
 <th><span class="glyphicon glyphicon-bitcoin"></span> <?php echo _t("Precio_noche_persona"); ?></th> 
 <th><?php echo _t("Notas"); ?></th> 
 <th><?php echo _t("Estatus"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "reservas", $_usuarios_grupo)){
             //   include "./reservas/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
        while ($reservas = mysql_fetch_array($sql)) {
            include "./reservas/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "reservas", $_usuarios_grupo)){
                    include "./reservas/vista/tr.php";
                   // include "./reservas/vista/tr_editar.php";
                }else{
                    include "./reservas/vista/tr.php";
                }      
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "reservas", $_usuarios_grupo)){
             //   include "./reservas/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 

<?php  
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



