 <?php  
$borrar = (permisos_tiene_permiso("borrar", "contactos", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=contactos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="contactos">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="contactos_id" value="<?php echo $contactos_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="contactos_id_manager" value="<?php echo $contactos_id_manager; ?>" placeholder="<?php _t("Id_manager"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_sexo" value="<?php echo $contactos_sexo; ?>" placeholder="<?php _t("Sexo"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_nombres" value="<?php echo $contactos_nombres; ?>" placeholder="<?php _t("Nombres"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_apellidos" value="<?php echo $contactos_apellidos; ?>" placeholder="<?php _t("Apellidos"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_cedula" value="<?php echo $contactos_cedula; ?>" placeholder="<?php _t("Cedula"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_pais" value="<?php echo $contactos_pais; ?>" placeholder="<?php _t("Pais"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_provincia" value="<?php echo $contactos_provincia; ?>" placeholder="<?php _t("Provincia"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_ciudad" value="<?php echo $contactos_ciudad; ?>" placeholder="<?php _t("Ciudad"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_direccion" value="<?php echo $contactos_direccion; ?>" placeholder="<?php _t("Direccion"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_cpostal" value="<?php echo $contactos_cpostal; ?>" placeholder="<?php _t("Cpostal"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_email" value="<?php echo $contactos_email; ?>" placeholder="<?php _t("Email"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_facebook" value="<?php echo $contactos_facebook; ?>" placeholder="<?php _t("Facebook"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_linkedin" value="<?php echo $contactos_linkedin; ?>" placeholder="<?php _t("Linkedin"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_fecha_nacimiento" value="<?php echo $contactos_fecha_nacimiento; ?>" placeholder="<?php _t("Fecha_nacimiento"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_fecha_registro" value="<?php echo $contactos_fecha_registro; ?>" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_foto" value="<?php echo $contactos_foto; ?>" placeholder="<?php _t("Foto"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_estatus" value="<?php echo $contactos_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 