<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?></h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Id_empresa"); ?></th> 
<th><?php _t("Casa"); ?></th> 
<th><?php _t("Capacidad"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "casas", $_usuarios_grupo)){
             //   include "./casas/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
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


