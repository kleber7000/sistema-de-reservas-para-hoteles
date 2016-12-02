<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Lista de _usuarios"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_usuarios&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> <td>#</td>

 <th><?php echo _t("Grupo"); ?></th> 
 <th><?php echo _t("Nombres"); ?></th> 
 <th><?php echo _t("Usuario"); ?></th> 
 <th><?php echo _t("Clave"); ?></th> 
 <th><?php echo _t("Estatus"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_usuarios", $_usuarios_grupo)){
             //   include "./_usuarios/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
        while ($_usuarios = mysql_fetch_array($sql)) {
            include "./_usuarios/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "_usuarios", $_usuarios_grupo)){
                    include "./_usuarios/vista/tr.php";
                   // include "./_usuarios/vista/tr_editar.php";
                }else{
                    include "./_usuarios/vista/tr.php";
                }      
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "_usuarios", $_usuarios_grupo)){
             //   include "./_usuarios/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 

<?php  
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



