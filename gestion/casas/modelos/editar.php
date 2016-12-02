 <?php  
 $sql=mysql_query(" UPDATE casas SET  
 id_empresa = '$casas_id_empresa'  
 ,  casa = '$casas_casa'  
 ,  capacidad = '$casas_capacidad'  
 ,  estatus = '$casas_estatus'  
 WHERE id = '$casas_id' ",$conexion) or die ("Error: ".mysql_error());   
