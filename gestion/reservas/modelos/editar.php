 <?php  
 $sql=mysql_query(" UPDATE reservas SET  
 id_casa = '$reservas_id_casa'  
 ,  id_contacto = '$reservas_id_contacto'  
 ,  fecha_entrada = '$reservas_fecha_entrada'  
 ,  fecha_salida = '$reservas_fecha_salida'  
 ,  pax = '$reservas_pax'  
 ,  precio_noche_persona = '$reservas_precio_noche_persona'  
 ,  notas = '$reservas_notas'  
 ,  estatus = '$reservas_estatus'  
 WHERE id = '$reservas_id' ",$conexion) or die ("Error: ".mysql_error());   
