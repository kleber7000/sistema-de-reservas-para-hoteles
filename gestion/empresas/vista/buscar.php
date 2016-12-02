<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?></h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Id_propietario"); ?></th> 
<th><?php _t("Sitio_web"); ?></th> 
<th><?php _t("Nombre"); ?></th> 
<th><?php _t("Tipo"); ?></th> 
<th><?php _t("Sector_actividad"); ?></th> 
<th><?php _t("Pais"); ?></th> 
<th><?php _t("Provincia"); ?></th> 
<th><?php _t("Ciudad"); ?></th> 
<th><?php _t("Cpostal"); ?></th> 
<th><?php _t("Direccion"); ?></th> 
<th><?php _t("Tel"); ?></th> 
<th><?php _t("Fax"); ?></th> 
<th><?php _t("Email"); ?></th> 
<th><?php _t("Twitter"); ?></th> 
<th><?php _t("Google_plus"); ?></th> 
<th><?php _t("Facebook"); ?></th> 
<th><?php _t("Linkedin"); ?></th> 
<th><?php _t("Empresa_contacto"); ?></th> 
<th><?php _t("Empresa_contacto_email"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "empresas", $_usuarios_grupo)){
             //   include "./empresas/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($empresas = mysql_fetch_array($sql)) {
            include "./empresas/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "empresas", $_usuarios_grupo)){
                    include "./empresas/vista/tr.php";
                   // include "./empresas/vista/tr_editar.php";
                }else{
                    include "./empresas/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "empresas", $_usuarios_grupo)){
             //   include "./empresas/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


