 <?php  
$borrar = (permisos_tiene_permiso("borrar", "reservas", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=reservas&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="reservas">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="reservas_id" value="<?php echo $reservas_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="reservas_id_casa" value="<?php echo $reservas_id_casa; ?>" placeholder="<?php _t("Id_casa"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_id_contacto" value="<?php echo $reservas_id_contacto; ?>" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_fecha_entrada" value="<?php echo $reservas_fecha_entrada; ?>" placeholder="<?php _t("Fecha_entrada"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_fecha_salida" value="<?php echo $reservas_fecha_salida; ?>" placeholder="<?php _t("Fecha_salida"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_pax" value="<?php echo $reservas_pax; ?>" placeholder="<?php _t("Pax"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_notas" value="<?php echo $reservas_notas; ?>" placeholder="<?php _t("Notas"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_estatus" value="<?php echo $reservas_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 