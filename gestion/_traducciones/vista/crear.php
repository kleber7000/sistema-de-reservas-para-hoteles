<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo _traducciones"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="_traducciones"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="_traducciones_contenido_id" class="col-sm-2 control-label"><?php _t("Contenido_id"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_traducciones_contenido_id" id="_traducciones_contenido_id" placeholder="<?php _t("Contenido_id"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_traducciones_idioma" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_traducciones_idioma" id="_traducciones_idioma" placeholder="<?php _t("Idioma"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_traducciones_traduccion" class="col-sm-2 control-label"><?php _t("Traduccion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_traducciones_traduccion" id="_traducciones_traduccion" placeholder="<?php _t("Traduccion"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
