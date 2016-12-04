<form method="get" action="index.php" >
                <input type="hidden" name="p" value="articulos">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="articulos_id_tipo" value="" placeholder="<?php _t("Id_tipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="articulos_titulo" value="" placeholder="<?php _t("Titulo"); ?>"></td> 
 <td><input class="form-control" type="text" name="articulos_contenido" value="" placeholder="<?php _t("Contenido"); ?>"></td> 
 <td><input class="form-control" type="text" name="articulos_fecha_registro" value="" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="articulos_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 