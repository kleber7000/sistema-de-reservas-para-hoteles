
            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="casas">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="casas_id_empresa" value="" placeholder="<?php _t("Id_empresa"); ?>"></td> 
 <td><input class="form-control" type="text" name="casas_casa" value="" placeholder="<?php _t("Casa"); ?>"></td> 
 <td><input class="form-control" type="text" name="casas_capacidad" value="" placeholder="<?php _t("Capacidad"); ?>"></td> 
 <td><input class="form-control" type="text" name="casas_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 