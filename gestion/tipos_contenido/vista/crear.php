<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo tipos_contenido"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="tipos_contenido"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="tipos_contenido_tipo" class="col-sm-2 control-label"><?php _t("Tipo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="tipos_contenido_tipo" id="tipos_contenido_tipo" placeholder="<?php _t("Tipo"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
