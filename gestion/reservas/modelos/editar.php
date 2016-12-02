 <?php  
 $sql=mysql_query(" UPDATE reservas SET  
 id_casa = '$reservas_id_casa'  
 ,  id_contacto = '$reservas_id_contacto'  
 ,  fecha_inicio = '$reservas_fecha_inicio'  
 ,  fecha_fin = '$reservas_fecha_fin'  
 ,  pax = '$reservas_pax'  
 ,  estatus = '$reservas_estatus'  
 WHERE id = '$reservas_id' ",$conexion) or die ("Error: ".mysql_error());   
