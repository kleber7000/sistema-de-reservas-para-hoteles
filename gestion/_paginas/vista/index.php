<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Lista de _paginas"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_paginas&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> <td>#</td>

 <th><?php echo _t("Pagina"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_paginas", $_usuarios_grupo)){
             //   include "./_paginas/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
        while ($_paginas = mysql_fetch_array($sql)) {
            include "./_paginas/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "_paginas", $_usuarios_grupo)){
                    include "./_paginas/vista/tr.php";
                   // include "./_paginas/vista/tr_editar.php";
                }else{
                    include "./_paginas/vista/tr.php";
                }      
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "_paginas", $_usuarios_grupo)){
             //   include "./_paginas/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 

<?php  
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



