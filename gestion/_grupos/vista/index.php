<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Lista de _grupos"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_grupos&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> <td>#</td>

 <th><?php echo _t("Grupo"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_grupos", $_usuarios_grupo)){
             //   include "./_grupos/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
        while ($_grupos = mysql_fetch_array($sql)) {
            include "./_grupos/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "_grupos", $_usuarios_grupo)){
                    include "./_grupos/vista/tr.php";
                   // include "./_grupos/vista/tr_editar.php";
                }else{
                    include "./_grupos/vista/tr.php";
                }      
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "_grupos", $_usuarios_grupo)){
             //   include "./_grupos/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 

<?php  
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



