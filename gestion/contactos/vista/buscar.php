<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?></h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Id_manager"); ?></th> 
<th><?php _t("Sexo"); ?></th> 
<th><?php _t("Nombres"); ?></th> 
<th><?php _t("Apellidos"); ?></th> 
<th><?php _t("Cedula"); ?></th> 
<th><?php _t("Pais"); ?></th> 
<th><?php _t("Provincia"); ?></th> 
<th><?php _t("Ciudad"); ?></th> 
<th><?php _t("Direccion"); ?></th> 
<th><?php _t("Cpostal"); ?></th> 
<th><?php _t("Telefono_casa"); ?></th> 
<th><?php _t("Telefono_trabajo"); ?></th> 
<th><?php _t("Telefono_mobil"); ?></th> 
<th><?php _t("Email"); ?></th> 
<th><?php _t("Facebook"); ?></th> 
<th><?php _t("Linkedin"); ?></th> 
<th><?php _t("Fecha_nacimiento"); ?></th> 
<th><?php _t("Fecha_registro"); ?></th> 
<th><?php _t("Foto"); ?></th> 
<th><?php _t("Notas"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "contactos", $_usuarios_grupo)){
             //   include "./contactos/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($contactos = mysql_fetch_array($sql)) {
            include "./contactos/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "contactos", $_usuarios_grupo)){
                    include "./contactos/vista/tr.php";
                   // include "./contactos/vista/tr_editar.php";
                }else{
                    include "./contactos/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "contactos", $_usuarios_grupo)){
             //   include "./contactos/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


