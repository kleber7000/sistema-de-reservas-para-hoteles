<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="casas"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="casas_id_empresa" class="col-sm-2 control-label"><?php _t("Id_empresa");?></label> 
       <input type="text" class="form-control" name="casas_id_empresa" id="casas_id_empresa" placeholder="<?php _t("Id_empresa"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="casas_casa" class="col-sm-2 control-label"><?php _t("Casa");?></label> 
       <input type="text" class="form-control" name="casas_casa" id="casas_casa" placeholder="<?php _t("Casa"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="casas_capacidad" class="col-sm-2 control-label"><?php _t("Capacidad");?></label> 
       <input type="text" class="form-control" name="casas_capacidad" id="casas_capacidad" placeholder="<?php _t("Capacidad"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="casas_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="casas_estatus" id="casas_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
