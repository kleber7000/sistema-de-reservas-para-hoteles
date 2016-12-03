<form method="post" action="confirmacion.php">


    <div class="form-group">
        <label for="nombres">Nombres y apellidos</label>
        <input type="text" class="form-control" id="nombres" placeholder="Nombres y apelidos">
    </div>

    <div class="form-group">
        <label for="tel">Telefono</label>
        <input type="email" class="form-control" id="tel" placeholder="">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
    </div>


    

    <div class="form-group">
        <label class="sr-only" for="fecha_llegada"><?php _t("Fecha de llegada"); ?></label>
        <div class="input-group">
            <input type="text" class="form-control" name="fecha_llegada" id="fecha_llegada" placeholder="<?php _t("Fecha de llegada"); ?>">
            <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
        </div>
    </div>

    <div class="form-group">
        <label class="sr-only" for="fecha_salida"><?php _t("Fecha de salida"); ?></label>
        <div class="input-group">
            <input type="text" class="form-control" name="fecha_salida" id="fecha_salida" placeholder="<?php _t("Fecha de salida"); ?>">
            <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
        </div>
    </div>





    



    <div class="form-group">
        <label for="exampleInputPassword1">Huespedes</label>
        <select class="form-control" name="pax">
            <optgroup label="Casa Sayani">
                <option value="1">1 Huesped (10 USD/noche)</option>
                <option value="1">2 Huespedes (20 USD/noche)</option>
                <option value="1">3 Huespedes (30 USD /noche)</option>
                <option value="1">4 Huespedes (40 USD /noche)</option>
                <option value="1">5 Huespedes (50 USD /noche)</option>
                <option value="1">6 Huespedes (60 USD /noche)</option>
            </optgroup>

            <optgroup label="Casa Erica">
                <option value="1">1 Huesped (10 USD/noche)</option>
                <option value="1">2 Huespedes (20 USD/noche)</option>
                <option value="1">3 Huespedes (30 USD /noche)</option>
                <option value="1">4 Huespedes (40 USD /noche)</option>
                <option value="1">5 Huespedes (50 USD /noche)</option>
                <option value="1">6 Huespedes (60 USD /noche)</option>
            </optgroup>

            <optgroup label="Casa Javier">
                <option value="1">1 Huesped (10 USD/noche)</option>
                <option value="1">2 Huespedes (20 USD/noche)</option>
                <option value="1">3 Huespedes (30 USD /noche)</option>
                <option value="1">4 Huespedes (40 USD /noche)</option>
                <option value="1">5 Huespedes (50 USD /noche)</option>
                <option value="1">6 Huespedes (60 USD /noche)</option>
            </optgroup>


        </select>
    </div>


    <div class="checkbox">
        <label>
            <input type="checkbox"> Recojida en aeropuerto (80 USD extra)
        </label>
    </div>

    <div class="checkbox">
        <label>
            <input type="checkbox"> Desayuno (9.99 USD por persona / desayuno)
        </label>
    </div>




    <button type="submit" class="btn btn-default">Submit</button>


</form>