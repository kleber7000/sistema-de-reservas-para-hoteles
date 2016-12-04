<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?></h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Tipo"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "tipos_contenido", $_usuarios_grupo)){
             //   include "./tipos_contenido/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
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


