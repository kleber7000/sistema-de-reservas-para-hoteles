<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo _permisos"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="_permisos"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="_permisos_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_permisos_grupo" id="_permisos_grupo" placeholder="<?php _t("Grupo"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_permisos_pagina" class="col-sm-2 control-label"><?php _t("Pagina"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_permisos_pagina" id="_permisos_pagina" placeholder="<?php _t("Pagina"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_permisos_permiso" class="col-sm-2 control-label"><?php _t("Permiso"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_permisos_permiso" id="_permisos_permiso" placeholder="<?php _t("Permiso"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
