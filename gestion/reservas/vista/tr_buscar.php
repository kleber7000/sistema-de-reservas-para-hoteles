<form method="get" action="index.php" >
                <input type="hidden" name="p" value="reservas">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="reservas_id_casa" value="" placeholder="<?php _t("Id_casa"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_id_contacto" value="" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_fecha_inicio" value="" placeholder="<?php _t("Fecha_inicio"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_fecha_fin" value="" placeholder="<?php _t("Fecha_fin"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_pax" value="" placeholder="<?php _t("Pax"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 