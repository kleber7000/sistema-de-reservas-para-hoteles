 <?php 
  $articulos_id = $articulos['id']; 
  $articulos_id_tipo = $articulos['id_tipo']; 
  $articulos_titulo = $articulos['titulo']; 
  $articulos_contenido = $articulos['contenido']; 
  $articulos_fecha_registro = $articulos['fecha_registro']; 
  $articulos_estatus = $articulos['estatus']; 
 $articulos_estatus_0 = "";   $articulos_estatus_1 = "";      if($articulos_estatus==0){
      $articulos_estatus_0 = " checked "; 
      $articulos_estatus_1 = ""; 
  }else {
      $articulos_estatus_0 = ""; 
      $articulos_estatus_1 = "checked";       
  }  
