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
                      <label for="Fecha_inicio"><?php _t("Fecha_inicio"); ?></label>
                      <input type="text" class="form-control" name="reservas_fecha_inicio" id="reservas_fecha_inicio" placeholder="<?php _t("Fecha_inicio"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_fin"><?php _t("Fecha_fin"); ?></label>
                      <input type="text" class="form-control" name="reservas_fecha_fin" id="reservas_fecha_fin" placeholder="<?php _t("Fecha_fin"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Pax"><?php _t("Pax"); ?></label>
                      <input type="text" class="form-control" name="reservas_pax" id="reservas_pax" placeholder="<?php _t("Pax"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="reservas_estatus" id="reservas_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>