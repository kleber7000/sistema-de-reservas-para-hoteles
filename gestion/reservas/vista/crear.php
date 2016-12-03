<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo reservas"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="reservas"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

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
     <label for="reservas_fecha_entrada" class="col-sm-2 control-label"><?php _t("Fecha_entrada"); ?></label> 
     <div class="col-sm-10"> 
       <input type="facha" class="form-control" name="reservas_fecha_entrada" id="reservas_fecha_entrada" placeholder="<?php _t("Fecha_entrada"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reservas_fecha_salida" class="col-sm-2 control-label"><?php _t("Fecha_salida"); ?></label> 
     <div class="col-sm-10"> 
       <input type="facha" class="form-control" name="reservas_fecha_salida" id="reservas_fecha_salida" placeholder="<?php _t("Fecha_salida"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reservas_pax" class="col-sm-2 control-label"><?php _t("Pax"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="reservas_pax" id="reservas_pax" placeholder="<?php _t("Pax"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reservas_notas" class="col-sm-2 control-label"><?php _t("Notas"); ?></label> 
     <div class="col-sm-10"> 
       <textarea  class="form-control" name="reservas_notas" id="reservas_notas" placeholder="<?php _t("Notas"); ?>"></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reservas_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input  type="radio" name="reservas_estatus" value="1" <?php echo "$reservas_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input  type="radio" name="reservas_estatus" value="0"  <?php echo "$reservas_estatus_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
