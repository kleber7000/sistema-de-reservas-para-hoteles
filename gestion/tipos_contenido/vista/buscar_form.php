<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="tipos_contenido"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="tipos_contenido_tipo" class="col-sm-2 control-label"><?php _t("Tipo");?></label> 
       <input type="text" class="form-control" name="tipos_contenido_tipo" id="tipos_contenido_tipo" placeholder="<?php _t("Tipo"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
