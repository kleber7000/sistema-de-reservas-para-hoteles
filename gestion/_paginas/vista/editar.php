<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar _paginas"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="_paginas"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="_paginas_id" value="<?php echo $_paginas_id; ?>"> 

 <div class="form-group"> 
     <label for="_paginas_pagina" class="col-sm-2 control-label"><?php _t("Pagina"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_paginas_pagina" id="_paginas_pagina" placeholder="<?php _t("Pagina"); ?>" value="<?php echo $_paginas_pagina; ?>"   > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
