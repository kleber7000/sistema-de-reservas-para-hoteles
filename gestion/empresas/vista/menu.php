<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="empresas">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Id_propietario"><?php _t("Id_propietario"); ?></label>
                      <input type="text" class="form-control" name="empresas_id_propietario" id="empresas_id_propietario" placeholder="<?php _t("Id_propietario"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Sitio_web"><?php _t("Sitio_web"); ?></label>
                      <input type="text" class="form-control" name="empresas_sitio_web" id="empresas_sitio_web" placeholder="<?php _t("Sitio_web"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Nombre"><?php _t("Nombre"); ?></label>
                      <input type="text" class="form-control" name="empresas_nombre" id="empresas_nombre" placeholder="<?php _t("Nombre"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Tipo"><?php _t("Tipo"); ?></label>
                      <input type="text" class="form-control" name="empresas_tipo" id="empresas_tipo" placeholder="<?php _t("Tipo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Sector_actividad"><?php _t("Sector_actividad"); ?></label>
                      <input type="text" class="form-control" name="empresas_sector_actividad" id="empresas_sector_actividad" placeholder="<?php _t("Sector_actividad"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Pais"><?php _t("Pais"); ?></label>
                      <input type="text" class="form-control" name="empresas_pais" id="empresas_pais" placeholder="<?php _t("Pais"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Provincia"><?php _t("Provincia"); ?></label>
                      <input type="text" class="form-control" name="empresas_provincia" id="empresas_provincia" placeholder="<?php _t("Provincia"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Ciudad"><?php _t("Ciudad"); ?></label>
                      <input type="text" class="form-control" name="empresas_ciudad" id="empresas_ciudad" placeholder="<?php _t("Ciudad"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Cpostal"><?php _t("Cpostal"); ?></label>
                      <input type="text" class="form-control" name="empresas_cpostal" id="empresas_cpostal" placeholder="<?php _t("Cpostal"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Direccion"><?php _t("Direccion"); ?></label>
                      <input type="text" class="form-control" name="empresas_direccion" id="empresas_direccion" placeholder="<?php _t("Direccion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Tel"><?php _t("Tel"); ?></label>
                      <input type="text" class="form-control" name="empresas_tel" id="empresas_tel" placeholder="<?php _t("Tel"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fax"><?php _t("Fax"); ?></label>
                      <input type="text" class="form-control" name="empresas_fax" id="empresas_fax" placeholder="<?php _t("Fax"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Email"><?php _t("Email"); ?></label>
                      <input type="text" class="form-control" name="empresas_email" id="empresas_email" placeholder="<?php _t("Email"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Twitter"><?php _t("Twitter"); ?></label>
                      <input type="text" class="form-control" name="empresas_twitter" id="empresas_twitter" placeholder="<?php _t("Twitter"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Google_plus"><?php _t("Google_plus"); ?></label>
                      <input type="text" class="form-control" name="empresas_google_plus" id="empresas_google_plus" placeholder="<?php _t("Google_plus"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Facebook"><?php _t("Facebook"); ?></label>
                      <input type="text" class="form-control" name="empresas_facebook" id="empresas_facebook" placeholder="<?php _t("Facebook"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Linkedin"><?php _t("Linkedin"); ?></label>
                      <input type="text" class="form-control" name="empresas_linkedin" id="empresas_linkedin" placeholder="<?php _t("Linkedin"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Empresa_contacto"><?php _t("Empresa_contacto"); ?></label>
                      <input type="text" class="form-control" name="empresas_empresa_contacto" id="empresas_empresa_contacto" placeholder="<?php _t("Empresa_contacto"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Empresa_contacto_email"><?php _t("Empresa_contacto_email"); ?></label>
                      <input type="text" class="form-control" name="empresas_empresa_contacto_email" id="empresas_empresa_contacto_email" placeholder="<?php _t("Empresa_contacto_email"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="empresas_estatus" id="empresas_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>