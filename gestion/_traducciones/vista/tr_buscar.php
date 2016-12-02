<form method="get" action="index.php" >
                <input type="hidden" name="p" value="_traducciones">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="_traducciones_contenido_id" value="" placeholder="<?php _t("Contenido_id"); ?>"></td> 
 <td><input class="form-control" type="text" name="_traducciones_idioma" value="" placeholder="<?php _t("Idioma"); ?>"></td> 
 <td><input class="form-control" type="text" name="_traducciones_traduccion" value="" placeholder="<?php _t("Traduccion"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 