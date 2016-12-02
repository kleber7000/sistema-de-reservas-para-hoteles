 <?php 
  $reservas_id = $reservas['id']; 
  $reservas_id_casa = $reservas['id_casa']; 
  $reservas_id_contacto = $reservas['id_contacto']; 
  $reservas_fecha_inicio = $reservas['fecha_inicio']; 
  $reservas_fecha_fin = $reservas['fecha_fin']; 
  $reservas_pax = $reservas['pax']; 
  $reservas_estatus = $reservas['estatus']; 
 $reservas_estatus_0 = "";   $reservas_estatus_1 = "";      if($reservas_estatus==0){
      $reservas_estatus_0 = " checked "; 
      $reservas_estatus_1 = ""; 
  }else {
      $reservas_estatus_0 = ""; 
      $reservas_estatus_1 = "checked";       
  }  
