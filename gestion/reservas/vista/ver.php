</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="reservas"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="reservas_id" value="<?php echo $reservas_id; ?>"> 
 <div class="form-group"> 
     <label for="reservas_id_casa" class="col-sm-2 control-label"><?php _t("Id_casa"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="reservas_id_casa" id="reservas_id_casa" placeholder="<?php _t("Id_casa"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reservas_id_contacto" class="col-sm-2 control-label"><?php _t("Id_contacto"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="reservas_id_contacto" id="reservas_id_contacto" placeholder="<?php _t("Id_contacto"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reservas_pax" class="col-sm-2 control-label"><?php _t("Pax"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="reservas_pax" id="reservas_pax" placeholder="<?php _t("Pax"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reservas_precio_noche_persona" class="col-sm-2 control-label"><?php _t("Precio_noche_persona"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="reservas_precio_noche_persona" id="reservas_precio_noche_persona" placeholder="<?php _t("Precio_noche_persona"); ?>" value="<?php echo $reservas_precio_noche_persona; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reservas_notas" class="col-sm-2 control-label"><?php _t("Notas"); ?></label> 
     <div class="col-sm-10"> 
       <textarea disabled class="form-control" name="reservas_notas" id="reservas_notas" placeholder="<?php _t("Notas"); ?>"><?php echo $reservas_notas; ?></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reservas_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="reservas_estatus" value="1" <?php echo "$reservas_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="reservas_estatus" value="0"  <?php echo "$reservas_estatus_0"; ?>  >
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
 <a href="index.php?p=reservas&c=txt&reservas_id=<?php echo $reservas_id; ?>">Formato texto</a> 
