 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM empresas  
 WHERE  
 id_propietario like '%$empresas_id_propietario%'    
 AND  sitio_web like '%$empresas_sitio_web%'    
 AND  nombre like '%$empresas_nombre%'    
 AND  tipo like '%$empresas_tipo%'    
 AND  sector_actividad like '%$empresas_sector_actividad%'    
 AND  pais like '%$empresas_pais%'    
 AND  provincia like '%$empresas_provincia%'    
 AND  ciudad like '%$empresas_ciudad%'    
 AND  cpostal like '%$empresas_cpostal%'    
 AND  direccion like '%$empresas_direccion%'    
 AND  tel like '%$empresas_tel%'    
 AND  fax like '%$empresas_fax%'    
 AND  email like '%$empresas_email%'    
 AND  twitter like '%$empresas_twitter%'    
 AND  google_plus like '%$empresas_google_plus%'    
 AND  facebook like '%$empresas_facebook%'    
 AND  linkedin like '%$empresas_linkedin%'    
 AND  empresa_contacto like '%$empresas_empresa_contacto%'    
 AND  empresa_contacto_email like '%$empresas_empresa_contacto_email%'    
 AND  estatus like '%$empresas_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
