 <div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="reservas"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="reservas_id_casa" class="col-sm-2 control-label"><?php _t("Id_casa");?></label> 
       <input type="text" class="form-control" name="reservas_id_casa" id="reservas_id_casa" placeholder="<?php _t("Id_casa"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="reservas_id_contacto" class="col-sm-2 control-label"><?php _t("Id_contacto");?></label> 
       <input type="text" class="form-control" name="reservas_id_contacto" id="reservas_id_contacto" placeholder="<?php _t("Id_contacto"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="reservas_fecha_entrada" class="col-sm-2 control-label"><?php _t("Fecha_entrada");?></label> 
       <input type="text" class="form-control" name="reservas_fecha_entrada" id="reservas_fecha_entrada" placeholder="<?php _t("Fecha_entrada"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="reservas_fecha_salida" class="col-sm-2 control-label"><?php _t("Fecha_salida");?></label> 
       <input type="text" class="form-control" name="reservas_fecha_salida" id="reservas_fecha_salida" placeholder="<?php _t("Fecha_salida"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="reservas_pax" class="col-sm-2 control-label"><?php _t("Pax");?></label> 
       <input type="text" class="form-control" name="reservas_pax" id="reservas_pax" placeholder="<?php _t("Pax"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="reservas_precio_noche_persona" class="col-sm-2 control-label"><?php _t("Precio_noche_persona");?></label> 
       <input type="text" class="form-control" name="reservas_precio_noche_persona" id="reservas_precio_noche_persona" placeholder="<?php _t("Precio_noche_persona"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="reservas_notas" class="col-sm-2 control-label"><?php _t("Notas");?></label> 
       <input type="text" class="form-control" name="reservas_notas" id="reservas_notas" placeholder="<?php _t("Notas"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="reservas_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="reservas_estatus" id="reservas_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
