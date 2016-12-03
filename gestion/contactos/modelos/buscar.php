 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM contactos  
 WHERE  
 id_manager like '%$contactos_id_manager%'    
 AND  sexo like '%$contactos_sexo%'    
 AND  nombres like '%$contactos_nombres%'    
 AND  apellidos like '%$contactos_apellidos%'    
 AND  cedula like '%$contactos_cedula%'    
 AND  pais like '%$contactos_pais%'    
 AND  provincia like '%$contactos_provincia%'    
 AND  ciudad like '%$contactos_ciudad%'    
 AND  direccion like '%$contactos_direccion%'    
 AND  cpostal like '%$contactos_cpostal%'    
 AND  telefono_casa like '%$contactos_telefono_casa%'    
 AND  telefono_trabajo like '%$contactos_telefono_trabajo%'    
 AND  telefono_mobil like '%$contactos_telefono_mobil%'    
 AND  email like '%$contactos_email%'    
 AND  facebook like '%$contactos_facebook%'    
 AND  linkedin like '%$contactos_linkedin%'    
 AND  fecha_nacimiento like '%$contactos_fecha_nacimiento%'    
 AND  fecha_registro like '%$contactos_fecha_registro%'    
 AND  foto like '%$contactos_foto%'    
 AND  notas like '%$contactos_notas%'    
 AND  estatus like '%$contactos_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
