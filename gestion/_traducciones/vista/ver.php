</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="_traducciones"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="_traducciones_id" value="<?php echo $_traducciones_id; ?>"> 
 <div class="form-group"> 
     <label for="_traducciones_contenido_id" class="col-sm-2 control-label"><?php _t("Contenido_id"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_traducciones_contenido_id" id="_traducciones_contenido_id" placeholder="<?php _t("Contenido_id"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_traducciones_idioma" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_traducciones_idioma" id="_traducciones_idioma" placeholder="<?php _t("Idioma"); ?>" value="<?php echo $_traducciones_idioma; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_traducciones_traduccion" class="col-sm-2 control-label"><?php _t("Traduccion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_traducciones_traduccion" id="_traducciones_traduccion" placeholder="<?php _t("Traduccion"); ?>" value="<?php echo $_traducciones_traduccion; ?>"  disabled > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=_traducciones&c=txt&_traducciones_id=<?php echo $_traducciones_id; ?>">Formato texto</a> 
