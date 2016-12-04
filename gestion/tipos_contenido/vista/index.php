<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Lista de tipos_contenido"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=tipos_contenido&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> <td>#</td>

 <th><?php echo _t("Tipo"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "tipos_contenido", $_usuarios_grupo)){
             //   include "./tipos_contenido/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
        while ($tipos_contenido = mysql_fetch_array($sql)) {
            include "./tipos_contenido/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "tipos_contenido", $_usuarios_grupo)){
                    include "./tipos_contenido/vista/tr.php";
                   // include "./tipos_contenido/vista/tr_editar.php";
                }else{
                    include "./tipos_contenido/vista/tr.php";
                }      
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "tipos_contenido", $_usuarios_grupo)){
             //   include "./tipos_contenido/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 

<?php  
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



