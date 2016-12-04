 <?php  
$borrar = (permisos_tiene_permiso("borrar", "articulos", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=articulos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="articulos">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="articulos_id" value="<?php echo $articulos_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="articulos_id_tipo" value="<?php echo $articulos_id_tipo; ?>" placeholder="<?php _t("Id_tipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="articulos_titulo" value="<?php echo $articulos_titulo; ?>" placeholder="<?php _t("Titulo"); ?>"></td> 
 <td><input class="form-control" type="text" name="articulos_contenido" value="<?php echo $articulos_contenido; ?>" placeholder="<?php _t("Contenido"); ?>"></td> 
 <td><input class="form-control" type="text" name="articulos_fecha_registro" value="<?php echo $articulos_fecha_registro; ?>" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="articulos_estatus" value="<?php echo $articulos_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 