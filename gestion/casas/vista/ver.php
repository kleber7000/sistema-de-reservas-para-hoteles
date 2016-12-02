</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="casas"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="casas_id" value="<?php echo $casas_id; ?>"> 
 <div class="form-group"> 
     <label for="casas_id_empresa" class="col-sm-2 control-label"><?php _t("Id_empresa"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="casas_id_empresa" id="casas_id_empresa" placeholder="<?php _t("Id_empresa"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="casas_casa" class="col-sm-2 control-label"><?php _t("Casa"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="casas_casa" id="casas_casa" placeholder="<?php _t("Casa"); ?>" value="<?php echo $casas_casa; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="casas_capacidad" class="col-sm-2 control-label"><?php _t("Capacidad"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="casas_capacidad" id="casas_capacidad" placeholder="<?php _t("Capacidad"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="casas_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="casas_estatus" value="1" <?php echo "$casas_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="casas_estatus" value="0"  <?php echo "$casas_estatus_0"; ?>  >
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
 <a href="index.php?p=casas&c=txt&casas_id=<?php echo $casas_id; ?>">Formato texto</a> 
