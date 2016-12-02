 <?php  
$borrar = (permisos_tiene_permiso("borrar", "casas", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=casas&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="casas">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="casas_id" value="<?php echo $casas_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="casas_id_empresa" value="<?php echo $casas_id_empresa; ?>" placeholder="<?php _t("Id_empresa"); ?>"></td> 
 <td><input class="form-control" type="text" name="casas_casa" value="<?php echo $casas_casa; ?>" placeholder="<?php _t("Casa"); ?>"></td> 
 <td><input class="form-control" type="text" name="casas_capacidad" value="<?php echo $casas_capacidad; ?>" placeholder="<?php _t("Capacidad"); ?>"></td> 
 <td><input class="form-control" type="text" name="casas_estatus" value="<?php echo $casas_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 