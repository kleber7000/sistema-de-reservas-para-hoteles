<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="_usuarios"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="_usuarios_grupo" class="col-sm-2 control-label"><?php _t("Grupo");?></label> 
       <input type="text" class="form-control" name="_usuarios_grupo" id="_usuarios_grupo" placeholder="<?php _t("Grupo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_usuarios_nombres" class="col-sm-2 control-label"><?php _t("Nombres");?></label> 
       <input type="text" class="form-control" name="_usuarios_nombres" id="_usuarios_nombres" placeholder="<?php _t("Nombres"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_usuarios_usuario" class="col-sm-2 control-label"><?php _t("Usuario");?></label> 
       <input type="text" class="form-control" name="_usuarios_usuario" id="_usuarios_usuario" placeholder="<?php _t("Usuario"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_usuarios_clave" class="col-sm-2 control-label"><?php _t("Clave");?></label> 
       <input type="text" class="form-control" name="_usuarios_clave" id="_usuarios_clave" placeholder="<?php _t("Clave"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_usuarios_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="_usuarios_estatus" id="_usuarios_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
