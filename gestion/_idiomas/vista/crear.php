<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo _idiomas"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="_idiomas"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="_idiomas_idioma" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_idiomas_idioma" id="_idiomas_idioma" placeholder="<?php _t("Idioma"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_idiomas_nombre" class="col-sm-2 control-label"><?php _t("Nombre"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_idiomas_nombre" id="_idiomas_nombre" placeholder="<?php _t("Nombre"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
