<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="reservas">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Id_casa"><?php _t("Id_casa"); ?></label>
                      <input type="text" class="form-control" name="reservas_id_casa" id="reservas_id_casa" placeholder="<?php _t("Id_casa"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Id_contacto"><?php _t("Id_contacto"); ?></label>
                      <input type="text" class="form-control" name="reservas_id_contacto" id="reservas_id_contacto" placeholder="<?php _t("Id_contacto"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_entrada"><?php _t("Fecha_entrada"); ?></label>
                      <input type="text" class="form-control" name="reservas_fecha_entrada" id="reservas_fecha_entrada" placeholder="<?php _t("Fecha_entrada"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_salida"><?php _t("Fecha_salida"); ?></label>
                      <input type="text" class="form-control" name="reservas_fecha_salida" id="reservas_fecha_salida" placeholder="<?php _t("Fecha_salida"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Pax"><?php _t("Pax"); ?></label>
                      <input type="text" class="form-control" name="reservas_pax" id="reservas_pax" placeholder="<?php _t("Pax"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Precio_noche_persona"><?php _t("Precio_noche_persona"); ?></label>
                      <input type="text" class="form-control" name="reservas_precio_noche_persona" id="reservas_precio_noche_persona" placeholder="<?php _t("Precio_noche_persona"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Notas"><?php _t("Notas"); ?></label>
                      <input type="text" class="form-control" name="reservas_notas" id="reservas_notas" placeholder="<?php _t("Notas"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="reservas_estatus" id="reservas_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>