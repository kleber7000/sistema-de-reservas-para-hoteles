<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Lista de empresas"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=empresas&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> <td>#</td>

 <th><?php echo _t("Id_propietario"); ?></th> 
 <th><?php echo _t("Sitio_web"); ?></th> 
 <th><?php echo _t("Nombre"); ?></th> 
 <th><?php echo _t("Tipo"); ?></th> 
 <th><?php echo _t("Sector_actividad"); ?></th> 
 <th><?php echo _t("Pais"); ?></th> 
 <th><?php echo _t("Provincia"); ?></th> 
 <th><?php echo _t("Ciudad"); ?></th> 
 <th><?php echo _t("Cpostal"); ?></th> 
 <th><?php echo _t("Direccion"); ?></th> 
 <th><?php echo _t("Tel"); ?></th> 
 <th><?php echo _t("Fax"); ?></th> 
 <th><?php echo _t("Email"); ?></th> 
 <th><?php echo _t("Twitter"); ?></th> 
 <th><?php echo _t("Google_plus"); ?></th> 
 <th><?php echo _t("Facebook"); ?></th> 
 <th><?php echo _t("Linkedin"); ?></th> 
 <th><?php echo _t("Empresa_contacto"); ?></th> 
 <th><?php echo _t("Empresa_contacto_email"); ?></th> 
 <th><?php echo _t("Estatus"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "empresas", $_usuarios_grupo)){
             //   include "./empresas/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
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

<?php  
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



