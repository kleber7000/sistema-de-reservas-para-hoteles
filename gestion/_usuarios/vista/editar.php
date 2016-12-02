<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar _usuarios"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="_usuarios"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="_usuarios_id" value="<?php echo $_usuarios_id; ?>"> 

 <div class="form-group"> 
     <label for="_usuarios_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_usuarios_grupo" id="_usuarios_grupo" placeholder="<?php _t("Grupo"); ?>" value="<?php echo $_usuarios_grupo; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_usuarios_nombres" class="col-sm-2 control-label"><?php _t("Nombres"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_usuarios_nombres" id="_usuarios_nombres" placeholder="<?php _t("Nombres"); ?>" value="<?php echo $_usuarios_nombres; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_usuarios_usuario" class="col-sm-2 control-label"><?php _t("Usuario"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_usuarios_usuario" id="_usuarios_usuario" placeholder="<?php _t("Usuario"); ?>" value="<?php echo $_usuarios_usuario; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_usuarios_clave" class="col-sm-2 control-label"><?php _t("Clave"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_usuarios_clave" id="_usuarios_clave" placeholder="<?php _t("Clave"); ?>" value="<?php echo $_usuarios_clave; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_usuarios_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input  type="radio" name="_usuarios_estatus" value="1" <?php echo "$_usuarios_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input  type="radio" name="_usuarios_estatus" value="0"  <?php echo "$_usuarios_estatus_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
