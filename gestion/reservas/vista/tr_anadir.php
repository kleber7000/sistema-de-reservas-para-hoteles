
            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="reservas">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="reservas_id_casa" value="" placeholder="<?php _t("Id_casa"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_id_contacto" value="" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_fecha_inicio" value="" placeholder="<?php _t("Fecha_inicio"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_fecha_fin" value="" placeholder="<?php _t("Fecha_fin"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_pax" value="" placeholder="<?php _t("Pax"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservas_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 