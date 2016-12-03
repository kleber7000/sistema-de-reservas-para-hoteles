<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo contactos"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="contactos"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="contactos_id_manager" class="col-sm-2 control-label"><?php _t("Id_manager"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_id_manager" id="contactos_id_manager" placeholder="<?php _t("Id_manager"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_sexo" class="col-sm-2 control-label"><?php _t("Sexo"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input  type="radio" name="contactos_sexo" value="1" <?php echo "$contactos_sexo_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input  type="radio" name="contactos_sexo" value="0"  <?php echo "$contactos_sexo_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_nombres" class="col-sm-2 control-label"><?php _t("Nombres"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_nombres" id="contactos_nombres" placeholder="<?php _t("Nombres"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_apellidos" class="col-sm-2 control-label"><?php _t("Apellidos"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_apellidos" id="contactos_apellidos" placeholder="<?php _t("Apellidos"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_cedula" class="col-sm-2 control-label"><?php _t("Cedula"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_cedula" id="contactos_cedula" placeholder="<?php _t("Cedula"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_pais" class="col-sm-2 control-label"><?php _t("Pais"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_pais" id="contactos_pais" placeholder="<?php _t("Pais"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_provincia" class="col-sm-2 control-label"><?php _t("Provincia"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_provincia" id="contactos_provincia" placeholder="<?php _t("Provincia"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_ciudad" class="col-sm-2 control-label"><?php _t("Ciudad"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_ciudad" id="contactos_ciudad" placeholder="<?php _t("Ciudad"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_direccion" class="col-sm-2 control-label"><?php _t("Direccion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_direccion" id="contactos_direccion" placeholder="<?php _t("Direccion"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_cpostal" class="col-sm-2 control-label"><?php _t("Cpostal"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_cpostal" id="contactos_cpostal" placeholder="<?php _t("Cpostal"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_telefono_casa" class="col-sm-2 control-label"><?php _t("Telefono_casa"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_telefono_casa" id="contactos_telefono_casa" placeholder="<?php _t("Telefono_casa"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_telefono_trabajo" class="col-sm-2 control-label"><?php _t("Telefono_trabajo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_telefono_trabajo" id="contactos_telefono_trabajo" placeholder="<?php _t("Telefono_trabajo"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_telefono_mobil" class="col-sm-2 control-label"><?php _t("Telefono_mobil"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_telefono_mobil" id="contactos_telefono_mobil" placeholder="<?php _t("Telefono_mobil"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_email" class="col-sm-2 control-label"><?php _t("Email"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_email" id="contactos_email" placeholder="<?php _t("Email"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_facebook" class="col-sm-2 control-label"><?php _t("Facebook"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_facebook" id="contactos_facebook" placeholder="<?php _t("Facebook"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_linkedin" class="col-sm-2 control-label"><?php _t("Linkedin"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_linkedin" id="contactos_linkedin" placeholder="<?php _t("Linkedin"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_fecha_nacimiento" class="col-sm-2 control-label"><?php _t("Fecha_nacimiento"); ?></label> 
     <div class="col-sm-10"> 
       <input type="facha" class="form-control" name="contactos_fecha_nacimiento" id="contactos_fecha_nacimiento" placeholder="<?php _t("Fecha_nacimiento"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_foto" class="col-sm-2 control-label"><?php _t("Foto"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="contactos_foto" id="contactos_foto" placeholder="<?php _t("Foto"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_notas" class="col-sm-2 control-label"><?php _t("Notas"); ?></label> 
     <div class="col-sm-10"> 
       <textarea  class="form-control" name="contactos_notas" id="contactos_notas" placeholder="<?php _t("Notas"); ?>"></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="contactos_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input  type="radio" name="contactos_estatus" value="1" <?php echo "$contactos_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input  type="radio" name="contactos_estatus" value="0"  <?php echo "$contactos_estatus_0"; ?>  >
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
