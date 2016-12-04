</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="tipos_contenido"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="tipos_contenido_id" value="<?php echo $tipos_contenido_id; ?>"> 
 <div class="form-group"> 
     <label for="tipos_contenido_tipo" class="col-sm-2 control-label"><?php _t("Tipo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="tipos_contenido_tipo" id="tipos_contenido_tipo" placeholder="<?php _t("Tipo"); ?>" value="<?php echo $tipos_contenido_tipo; ?>"  disabled > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=tipos_contenido&c=txt&tipos_contenido_id=<?php echo $tipos_contenido_id; ?>">Formato texto</a> 
