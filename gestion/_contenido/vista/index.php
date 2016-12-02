<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Lista de _contenido"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_contenido&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> <td>#</td>

 <th><?php echo _t("Frase"); ?></th> 
 <th><?php echo _t("Contexto"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_contenido", $_usuarios_grupo)){
             //   include "./_contenido/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
        while ($_contenido = mysql_fetch_array($sql)) {
            include "./_contenido/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "_contenido", $_usuarios_grupo)){
                    include "./_contenido/vista/tr.php";
                   // include "./_contenido/vista/tr_editar.php";
                }else{
                    include "./_contenido/vista/tr.php";
                }      
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "_contenido", $_usuarios_grupo)){
             //   include "./_contenido/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 

<?php  
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



