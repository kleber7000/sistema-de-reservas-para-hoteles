<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar reservas"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="reservas"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
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
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
