<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="articulos">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Id_tipo"><?php _t("Id_tipo"); ?></label>
                      <input type="text" class="form-control" name="articulos_id_tipo" id="articulos_id_tipo" placeholder="<?php _t("Id_tipo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Titulo"><?php _t("Titulo"); ?></label>
                      <input type="text" class="form-control" name="articulos_titulo" id="articulos_titulo" placeholder="<?php _t("Titulo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Contenido"><?php _t("Contenido"); ?></label>
                      <input type="text" class="form-control" name="articulos_contenido" id="articulos_contenido" placeholder="<?php _t("Contenido"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_registro"><?php _t("Fecha_registro"); ?></label>
                      <input type="text" class="form-control" name="articulos_fecha_registro" id="articulos_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="articulos_estatus" id="articulos_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>