<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Lista de contactos"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=contactos&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> <td>#</td>

 <th><?php echo _t("Id_manager"); ?></th> 
 <th><?php echo _t("Sexo"); ?></th> 
 <th><?php echo _t("Nombres"); ?></th> 
 <th><?php echo _t("Apellidos"); ?></th> 
 <th><?php echo _t("Cedula"); ?></th> 
 <th><?php echo _t("Pais"); ?></th> 
 <th><?php echo _t("Provincia"); ?></th> 
 <th><?php echo _t("Ciudad"); ?></th> 
 <th><?php echo _t("Direccion"); ?></th> 
 <th><?php echo _t("Cpostal"); ?></th> 
 <th><?php echo _t("Telefono_casa"); ?></th> 
 <th><?php echo _t("Telefono_trabajo"); ?></th> 
 <th><?php echo _t("Telefono_mobil"); ?></th> 
 <th><?php echo _t("Email"); ?></th> 
 <th><?php echo _t("Facebook"); ?></th> 
 <th><?php echo _t("Linkedin"); ?></th> 
 <th><?php echo _t("Fecha_nacimiento"); ?></th> 
 <th><?php echo _t("Fecha_registro"); ?></th> 
 <th><?php echo _t("Foto"); ?></th> 
 <th><?php echo _t("Notas"); ?></th> 
 <th><?php echo _t("Estatus"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "contactos", $_usuarios_grupo)){
             //   include "./contactos/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
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

<?php  
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



