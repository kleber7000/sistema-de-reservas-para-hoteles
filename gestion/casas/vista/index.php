<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Lista de casas"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=casas&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> <td>#</td>

 <th><?php echo _t("Id_empresa"); ?></th> 
 <th><?php echo _t("Casa"); ?></th> 
 <th><?php echo _t("Capacidad"); ?></th> 
 <th><?php echo _t("Estatus"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "casas", $_usuarios_grupo)){
             //   include "./casas/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
        while ($casas = mysql_fetch_array($sql)) {
            include "./casas/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "casas", $_usuarios_grupo)){
                    include "./casas/vista/tr.php";
                   // include "./casas/vista/tr_editar.php";
                }else{
                    include "./casas/vista/tr.php";
                }      
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "casas", $_usuarios_grupo)){
             //   include "./casas/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 

<?php  
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



