<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo articulos"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="articulos"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="articulos_id_tipo" class="col-sm-2 control-label"><?php _t("Id_tipo"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="articulos_id_tipo" >
        <?php tipos_contenido_add($articulos_id_tipo); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="articulos_titulo" class="col-sm-2 control-label"><?php _t("Titulo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="articulos_titulo" id="articulos_titulo" placeholder="<?php _t("Titulo"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="articulos_contenido" class="col-sm-2 control-label"><?php _t("Contenido"); ?></label> 
     <div class="col-sm-10"> 
       <textarea  class="form-control" name="articulos_contenido" id="articulos_contenido" placeholder="<?php _t("Contenido"); ?>"></textarea> 
     </div> 
   </div> 


   <script>
            $( function() {
              $( "#articulos_fecha_registro" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="articulos_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha_registro"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="articulos_fecha_registro" id="articulos_fecha_registro" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="articulos_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input  type="radio" name="articulos_estatus" value="1" <?php echo "$articulos_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input  type="radio" name="articulos_estatus" value="0"  <?php echo "$articulos_estatus_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
