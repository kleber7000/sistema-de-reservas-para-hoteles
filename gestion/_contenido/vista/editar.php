<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar _contenido"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="_contenido"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="_contenido_id" value="<?php echo $_contenido_id; ?>"> 

 <div class="form-group"> 
     <label for="_contenido_frase" class="col-sm-2 control-label"><?php _t("Frase"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_contenido_frase" id="_contenido_frase" placeholder="<?php _t("Frase"); ?>" value="<?php echo $_contenido_frase; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_contenido_contexto" class="col-sm-2 control-label"><?php _t("Contexto"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_contenido_contexto" id="_contenido_contexto" placeholder="<?php _t("Contexto"); ?>" value="<?php echo $_contenido_contexto; ?>"   > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
