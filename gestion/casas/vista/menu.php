<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="casas">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Id_empresa"><?php _t("Id_empresa"); ?></label>
                      <input type="text" class="form-control" name="casas_id_empresa" id="casas_id_empresa" placeholder="<?php _t("Id_empresa"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Casa"><?php _t("Casa"); ?></label>
                      <input type="text" class="form-control" name="casas_casa" id="casas_casa" placeholder="<?php _t("Casa"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Capacidad"><?php _t("Capacidad"); ?></label>
                      <input type="text" class="form-control" name="casas_capacidad" id="casas_capacidad" placeholder="<?php _t("Capacidad"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="casas_estatus" id="casas_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>