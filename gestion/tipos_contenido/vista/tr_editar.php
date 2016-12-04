 <?php  
$borrar = (permisos_tiene_permiso("borrar", "tipos_contenido", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=tipos_contenido&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="tipos_contenido">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="tipos_contenido_id" value="<?php echo $tipos_contenido_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="tipos_contenido_tipo" value="<?php echo $tipos_contenido_tipo; ?>" placeholder="<?php _t("Tipo"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 