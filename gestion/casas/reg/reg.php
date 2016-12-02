 <?php 
  $casas_id = $casas['id']; 
  $casas_id_empresa = $casas['id_empresa']; 
  $casas_casa = $casas['casa']; 
  $casas_capacidad = $casas['capacidad']; 
  $casas_estatus = $casas['estatus']; 
 $casas_estatus_0 = "";   $casas_estatus_1 = "";      if($casas_estatus==0){
      $casas_estatus_0 = " checked "; 
      $casas_estatus_1 = ""; 
  }else {
      $casas_estatus_0 = ""; 
      $casas_estatus_1 = "checked";       
  }  
