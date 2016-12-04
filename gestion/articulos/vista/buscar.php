<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?></h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Id_tipo"); ?></th> 
<th><?php _t("Titulo"); ?></th> 
<th><?php _t("Contenido"); ?></th> 
<th><?php _t("Fecha_registro"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "articulos", $_usuarios_grupo)){
             //   include "./articulos/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($articulos = mysql_fetch_array($sql)) {
            include "./articulos/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "articulos", $_usuarios_grupo)){
                    include "./articulos/vista/tr.php";
                   // include "./articulos/vista/tr_editar.php";
                }else{
                    include "./articulos/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "articulos", $_usuarios_grupo)){
             //   include "./articulos/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


