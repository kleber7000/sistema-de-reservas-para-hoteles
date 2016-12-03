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
        <div class="col-sm-3"> 
            <div class="input-group">
            <select class="form-control" name="reservas_id_casa">
                <?php casas_add(); ?>
            </select>
            <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
        </div> 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="reservas_id_contacto" class="col-sm-2 control-label"><?php _t("Id_contacto"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="reservas_id_casa">
                <?php contactos_add(); ?>
            </select>
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="reservas_fecha_entrada" class="col-sm-2 control-label"><?php _t("Fecha_entrada"); ?></label> 
        <div class="col-sm-3"> 
            <div class="input-group">
            <input type="facha" class="form-control" name="reservas_fecha_entrada" id="reservas_fecha_entrada" placeholder="<?php _t("Fecha_entrada"); ?>" value=""   > 
            <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
            </div> 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="reservas_fecha_salida" class="col-sm-2 control-label"><?php _t("Fecha_salida"); ?></label> 
        <div class="col-sm-3"> 
            <div class="input-group">
            <input type="facha" class="form-control" name="reservas_fecha_salida" id="reservas_fecha_salida" placeholder="<?php _t("Fecha_salida"); ?>" value=""   > 
            <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
        </div> 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="reservas_pax" class="col-sm-2 control-label"><?php _t("Pax"); ?></label> 
        <div class="col-sm-3"> 
            <div class="input-group">
            <select class="form-control" name="reservas_pax">
                <?php for($i=1; $i<11; $i++){
                    echo "<option value=\"$i\"> $i persona(s)</option>"; 
                }?>                
            </select>
                <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
        </div> 
        </div> 
    </div> 

    
    

    
    
    

    <div class="form-group"> 
        <label for="reservas_precio_noche_persona" class="col-sm-2 control-label"><?php _t("Precio_noche_persona"); ?></label> 
        <div class="col-sm-3"> 
            <div class="input-group">
                 <span class="input-group-addon">$</span>
                <input type="text" class="form-control" 
                       name="reservas_precio_noche_persona" 
                       id="reservas_precio_noche_persona" placeholder="<?php _t("Sin decimales aca"); ?>" value=""   > 
                <div class="input-group-addon">.00</div>
        </div> 
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
