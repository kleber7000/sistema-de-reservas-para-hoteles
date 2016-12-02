</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="empresas"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="empresas_id" value="<?php echo $empresas_id; ?>"> 
 <div class="form-group"> 
     <label for="empresas_id_propietario" class="col-sm-2 control-label"><?php _t("Id_propietario"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_id_propietario" id="empresas_id_propietario" placeholder="<?php _t("Id_propietario"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_sitio_web" class="col-sm-2 control-label"><?php _t("Sitio_web"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_sitio_web" id="empresas_sitio_web" placeholder="<?php _t("Sitio_web"); ?>" value="<?php echo $empresas_sitio_web; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_nombre" class="col-sm-2 control-label"><?php _t("Nombre"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_nombre" id="empresas_nombre" placeholder="<?php _t("Nombre"); ?>" value="<?php echo $empresas_nombre; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_tipo" class="col-sm-2 control-label"><?php _t("Tipo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_tipo" id="empresas_tipo" placeholder="<?php _t("Tipo"); ?>" value="<?php echo $empresas_tipo; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_sector_actividad" class="col-sm-2 control-label"><?php _t("Sector_actividad"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_sector_actividad" id="empresas_sector_actividad" placeholder="<?php _t("Sector_actividad"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_pais" class="col-sm-2 control-label"><?php _t("Pais"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_pais" id="empresas_pais" placeholder="<?php _t("Pais"); ?>" value="<?php echo $empresas_pais; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_provincia" class="col-sm-2 control-label"><?php _t("Provincia"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_provincia" id="empresas_provincia" placeholder="<?php _t("Provincia"); ?>" value="<?php echo $empresas_provincia; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_ciudad" class="col-sm-2 control-label"><?php _t("Ciudad"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_ciudad" id="empresas_ciudad" placeholder="<?php _t("Ciudad"); ?>" value="<?php echo $empresas_ciudad; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_cpostal" class="col-sm-2 control-label"><?php _t("Cpostal"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_cpostal" id="empresas_cpostal" placeholder="<?php _t("Cpostal"); ?>" value="<?php echo $empresas_cpostal; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_direccion" class="col-sm-2 control-label"><?php _t("Direccion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_direccion" id="empresas_direccion" placeholder="<?php _t("Direccion"); ?>" value="<?php echo $empresas_direccion; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_tel" class="col-sm-2 control-label"><?php _t("Tel"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_tel" id="empresas_tel" placeholder="<?php _t("Tel"); ?>" value="<?php echo $empresas_tel; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_fax" class="col-sm-2 control-label"><?php _t("Fax"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_fax" id="empresas_fax" placeholder="<?php _t("Fax"); ?>" value="<?php echo $empresas_fax; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_email" class="col-sm-2 control-label"><?php _t("Email"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_email" id="empresas_email" placeholder="<?php _t("Email"); ?>" value="<?php echo $empresas_email; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_twitter" class="col-sm-2 control-label"><?php _t("Twitter"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_twitter" id="empresas_twitter" placeholder="<?php _t("Twitter"); ?>" value="<?php echo $empresas_twitter; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_google_plus" class="col-sm-2 control-label"><?php _t("Google_plus"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_google_plus" id="empresas_google_plus" placeholder="<?php _t("Google_plus"); ?>" value="<?php echo $empresas_google_plus; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_facebook" class="col-sm-2 control-label"><?php _t("Facebook"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_facebook" id="empresas_facebook" placeholder="<?php _t("Facebook"); ?>" value="<?php echo $empresas_facebook; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_linkedin" class="col-sm-2 control-label"><?php _t("Linkedin"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_linkedin" id="empresas_linkedin" placeholder="<?php _t("Linkedin"); ?>" value="<?php echo $empresas_linkedin; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_empresa_contacto" class="col-sm-2 control-label"><?php _t("Empresa_contacto"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_empresa_contacto" id="empresas_empresa_contacto" placeholder="<?php _t("Empresa_contacto"); ?>" value="<?php echo $empresas_empresa_contacto; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_empresa_contacto_email" class="col-sm-2 control-label"><?php _t("Empresa_contacto_email"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_empresa_contacto_email" id="empresas_empresa_contacto_email" placeholder="<?php _t("Empresa_contacto_email"); ?>" value="<?php echo $empresas_empresa_contacto_email; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="empresas_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="empresas_estatus" id="empresas_estatus" placeholder="<?php _t("Estatus"); ?>" value=""   > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=empresas&c=txt&empresas_id=<?php echo $empresas_id; ?>">Formato texto</a> 
