<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Lista de _permisos"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_permisos&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> <td>#</td>

 <th><?php echo _t("Grupo"); ?></th> 
 <th><?php echo _t("Pagina"); ?></th> 
 <th><?php echo _t("Permiso"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_permisos", $_usuarios_grupo)){
             //   include "./_permisos/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
        while ($_permisos = mysql_fetch_array($sql)) {
            include "./_permisos/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "_permisos", $_usuarios_grupo)){
                    include "./_permisos/vista/tr.php";
                   // include "./_permisos/vista/tr_editar.php";
                }else{
                    include "./_permisos/vista/tr.php";
                }      
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "_permisos", $_usuarios_grupo)){
             //   include "./_permisos/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 

<?php  
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



