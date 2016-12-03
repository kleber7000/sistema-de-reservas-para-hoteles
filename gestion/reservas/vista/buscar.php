<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?></h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Id_casa"); ?></th> 
<th><?php _t("Id_contacto"); ?></th> 
<th><?php _t("Fecha_entrada"); ?></th> 
<th><?php _t("Fecha_salida"); ?></th> 
<th><?php _t("Pax"); ?></th> 
<th><?php _t("Precio_noche_persona"); ?></th> 
<th><?php _t("Notas"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "reservas", $_usuarios_grupo)){
             //   include "./reservas/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
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


