 <?php  
$borrar = (permisos_tiene_permiso("borrar", "empresas", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=empresas&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="empresas">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="empresas_id" value="<?php echo $empresas_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="empresas_id_propietario" value="<?php echo $empresas_id_propietario; ?>" placeholder="<?php _t("Id_propietario"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_sitio_web" value="<?php echo $empresas_sitio_web; ?>" placeholder="<?php _t("Sitio_web"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_nombre" value="<?php echo $empresas_nombre; ?>" placeholder="<?php _t("Nombre"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_tipo" value="<?php echo $empresas_tipo; ?>" placeholder="<?php _t("Tipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_sector_actividad" value="<?php echo $empresas_sector_actividad; ?>" placeholder="<?php _t("Sector_actividad"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_pais" value="<?php echo $empresas_pais; ?>" placeholder="<?php _t("Pais"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_provincia" value="<?php echo $empresas_provincia; ?>" placeholder="<?php _t("Provincia"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_ciudad" value="<?php echo $empresas_ciudad; ?>" placeholder="<?php _t("Ciudad"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_cpostal" value="<?php echo $empresas_cpostal; ?>" placeholder="<?php _t("Cpostal"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_direccion" value="<?php echo $empresas_direccion; ?>" placeholder="<?php _t("Direccion"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_tel" value="<?php echo $empresas_tel; ?>" placeholder="<?php _t("Tel"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_fax" value="<?php echo $empresas_fax; ?>" placeholder="<?php _t("Fax"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_email" value="<?php echo $empresas_email; ?>" placeholder="<?php _t("Email"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_twitter" value="<?php echo $empresas_twitter; ?>" placeholder="<?php _t("Twitter"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_google_plus" value="<?php echo $empresas_google_plus; ?>" placeholder="<?php _t("Google_plus"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_facebook" value="<?php echo $empresas_facebook; ?>" placeholder="<?php _t("Facebook"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_linkedin" value="<?php echo $empresas_linkedin; ?>" placeholder="<?php _t("Linkedin"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_empresa_contacto" value="<?php echo $empresas_empresa_contacto; ?>" placeholder="<?php _t("Empresa_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_empresa_contacto_email" value="<?php echo $empresas_empresa_contacto_email; ?>" placeholder="<?php _t("Empresa_contacto_email"); ?>"></td> 
 <td><input class="form-control" type="text" name="empresas_estatus" value="<?php echo $empresas_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 