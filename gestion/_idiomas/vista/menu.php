<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="_idiomas">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Idioma"><?php _t("Idioma"); ?></label>
                      <input type="text" class="form-control" name="_idiomas_idioma" id="_idiomas_idioma" placeholder="<?php _t("Idioma"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Nombre"><?php _t("Nombre"); ?></label>
                      <input type="text" class="form-control" name="_idiomas_nombre" id="_idiomas_nombre" placeholder="<?php _t("Nombre"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>