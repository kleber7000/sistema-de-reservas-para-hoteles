 <?php 
 $accion = "editar"; 
 $pagina = "contactos"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 include "./contactos/reg/post.php";  
 include "./contactos/modelos/editar.php";  

 include "./contactos/modelos/ver.php";  
 include "./contactos/reg/reg.php"; 
 include "./contactos/vista/ver.php";  
 }else{ 
 $contactos_id = mysql_real_escape_string($_REQUEST['contactos_id']);      
 include "./contactos/modelos/ver.php"; 
 include "./contactos/reg/reg.php"; 
 include "./contactos/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
