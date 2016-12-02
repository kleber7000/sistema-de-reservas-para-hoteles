<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="contactos">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Id_manager"><?php _t("Id_manager"); ?></label>
                      <input type="text" class="form-control" name="contactos_id_manager" id="contactos_id_manager" placeholder="<?php _t("Id_manager"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Sexo"><?php _t("Sexo"); ?></label>
                      <input type="text" class="form-control" name="contactos_sexo" id="contactos_sexo" placeholder="<?php _t("Sexo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Nombres"><?php _t("Nombres"); ?></label>
                      <input type="text" class="form-control" name="contactos_nombres" id="contactos_nombres" placeholder="<?php _t("Nombres"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Apellidos"><?php _t("Apellidos"); ?></label>
                      <input type="text" class="form-control" name="contactos_apellidos" id="contactos_apellidos" placeholder="<?php _t("Apellidos"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Cedula"><?php _t("Cedula"); ?></label>
                      <input type="text" class="form-control" name="contactos_cedula" id="contactos_cedula" placeholder="<?php _t("Cedula"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Pais"><?php _t("Pais"); ?></label>
                      <input type="text" class="form-control" name="contactos_pais" id="contactos_pais" placeholder="<?php _t("Pais"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Provincia"><?php _t("Provincia"); ?></label>
                      <input type="text" class="form-control" name="contactos_provincia" id="contactos_provincia" placeholder="<?php _t("Provincia"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Ciudad"><?php _t("Ciudad"); ?></label>
                      <input type="text" class="form-control" name="contactos_ciudad" id="contactos_ciudad" placeholder="<?php _t("Ciudad"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Direccion"><?php _t("Direccion"); ?></label>
                      <input type="text" class="form-control" name="contactos_direccion" id="contactos_direccion" placeholder="<?php _t("Direccion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Cpostal"><?php _t("Cpostal"); ?></label>
                      <input type="text" class="form-control" name="contactos_cpostal" id="contactos_cpostal" placeholder="<?php _t("Cpostal"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Email"><?php _t("Email"); ?></label>
                      <input type="text" class="form-control" name="contactos_email" id="contactos_email" placeholder="<?php _t("Email"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Facebook"><?php _t("Facebook"); ?></label>
                      <input type="text" class="form-control" name="contactos_facebook" id="contactos_facebook" placeholder="<?php _t("Facebook"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Linkedin"><?php _t("Linkedin"); ?></label>
                      <input type="text" class="form-control" name="contactos_linkedin" id="contactos_linkedin" placeholder="<?php _t("Linkedin"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_nacimiento"><?php _t("Fecha_nacimiento"); ?></label>
                      <input type="text" class="form-control" name="contactos_fecha_nacimiento" id="contactos_fecha_nacimiento" placeholder="<?php _t("Fecha_nacimiento"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_registro"><?php _t("Fecha_registro"); ?></label>
                      <input type="text" class="form-control" name="contactos_fecha_registro" id="contactos_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Foto"><?php _t("Foto"); ?></label>
                      <input type="text" class="form-control" name="contactos_foto" id="contactos_foto" placeholder="<?php _t("Foto"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="contactos_estatus" id="contactos_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>