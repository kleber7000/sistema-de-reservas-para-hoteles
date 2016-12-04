<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="tipos_contenido">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Tipo"><?php _t("Tipo"); ?></label>
                      <input type="text" class="form-control" name="tipos_contenido_tipo" id="tipos_contenido_tipo" placeholder="<?php _t("Tipo"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>