 <?php  
$borrar = (permisos_tiene_permiso("borrar", "_traducciones", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=_traducciones&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="_traducciones">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="_traducciones_id" value="<?php echo $_traducciones_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="_traducciones_contenido_id" value="<?php echo $_traducciones_contenido_id; ?>" placeholder="<?php _t("Contenido_id"); ?>"></td> 
 <td><input class="form-control" type="text" name="_traducciones_idioma" value="<?php echo $_traducciones_idioma; ?>" placeholder="<?php _t("Idioma"); ?>"></td> 
 <td><input class="form-control" type="text" name="_traducciones_traduccion" value="<?php echo $_traducciones_traduccion; ?>" placeholder="<?php _t("Traduccion"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 