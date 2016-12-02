<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Lista de _traducciones"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_traducciones&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> <td>#</td>

 <th><?php echo _t("Contenido_id"); ?></th> 
 <th><?php echo _t("Idioma"); ?></th> 
 <th><?php echo _t("Traduccion"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_traducciones", $_usuarios_grupo)){
             //   include "./_traducciones/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
        while ($_traducciones = mysql_fetch_array($sql)) {
            include "./_traducciones/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "_traducciones", $_usuarios_grupo)){
                    include "./_traducciones/vista/tr.php";
                   // include "./_traducciones/vista/tr_editar.php";
                }else{
                    include "./_traducciones/vista/tr.php";
                }      
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "_traducciones", $_usuarios_grupo)){
             //   include "./_traducciones/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 

<?php  
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



