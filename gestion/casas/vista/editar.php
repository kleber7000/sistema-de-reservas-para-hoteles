<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar casas"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="casas"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="casas_id" value="<?php echo $casas_id; ?>"> 

 <div class="form-group"> 
     <label for="casas_id_empresa" class="col-sm-2 control-label"><?php _t("Id_empresa"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="casas_id_empresa" <?php echo $casas_id_empresa; ?>>
        <?php empresas_add($casas_id_empresa); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="casas_casa" class="col-sm-2 control-label"><?php _t("Casa"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="casas_casa" id="casas_casa" placeholder="<?php _t("Casa"); ?>" value="<?php echo $casas_casa; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="casas_capacidad" class="col-sm-2 control-label"><?php _t("Capacidad"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="casas_capacidad" id="casas_capacidad" placeholder="<?php _t("Capacidad"); ?>" value="<?php echo $casas_capacidad; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="casas_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input  type="radio" name="casas_estatus" value="1" <?php echo "$casas_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input  type="radio" name="casas_estatus" value="0"  <?php echo "$casas_estatus_0"; ?>  >
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
