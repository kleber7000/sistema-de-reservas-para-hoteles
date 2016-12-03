 <?php 
  $reservas_id = $reservas['id']; 
  $reservas_id_casa = $reservas['id_casa']; 
  $reservas_id_contacto = $reservas['id_contacto']; 
  $reservas_fecha_entrada = $reservas['fecha_entrada']; 
  $reservas_fecha_salida = $reservas['fecha_salida']; 
  $reservas_pax = $reservas['pax']; 
  $reservas_precio_noche_persona = $reservas['precio_noche_persona']; 
  $reservas_notas = $reservas['notas']; 
  $reservas_estatus = $reservas['estatus']; 
 $reservas_estatus_0 = "";   $reservas_estatus_1 = "";      if($reservas_estatus==0){
      $reservas_estatus_0 = " checked "; 
      $reservas_estatus_1 = ""; 
  }else {
      $reservas_estatus_0 = ""; 
      $reservas_estatus_1 = "checked";       
  }  
