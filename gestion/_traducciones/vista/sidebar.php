﻿ <div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="_traducciones"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="_traducciones_contenido_id" class="col-sm-2 control-label"><?php _t("Contenido_id");?></label> 
       <input type="text" class="form-control" name="_traducciones_contenido_id" id="_traducciones_contenido_id" placeholder="<?php _t("Contenido_id"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_traducciones_idioma" class="col-sm-2 control-label"><?php _t("Idioma");?></label> 
       <input type="text" class="form-control" name="_traducciones_idioma" id="_traducciones_idioma" placeholder="<?php _t("Idioma"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_traducciones_traduccion" class="col-sm-2 control-label"><?php _t("Traduccion");?></label> 
       <input type="text" class="form-control" name="_traducciones_traduccion" id="_traducciones_traduccion" placeholder="<?php _t("Traduccion"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
