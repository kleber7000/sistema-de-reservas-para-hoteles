 <?php 
 $accion = "buscar"; 
 $pagina = "contactos"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $contactos_id_manager = mysql_real_escape_string($_REQUEST['contactos_id_manager']);
  $contactos_sexo = mysql_real_escape_string($_REQUEST['contactos_sexo']);
  $contactos_nombres = mysql_real_escape_string($_REQUEST['contactos_nombres']);
  $contactos_apellidos = mysql_real_escape_string($_REQUEST['contactos_apellidos']);
  $contactos_cedula = mysql_real_escape_string($_REQUEST['contactos_cedula']);
  $contactos_pais = mysql_real_escape_string($_REQUEST['contactos_pais']);
  $contactos_provincia = mysql_real_escape_string($_REQUEST['contactos_provincia']);
  $contactos_ciudad = mysql_real_escape_string($_REQUEST['contactos_ciudad']);
  $contactos_direccion = mysql_real_escape_string($_REQUEST['contactos_direccion']);
  $contactos_cpostal = mysql_real_escape_string($_REQUEST['contactos_cpostal']);
  $contactos_telefono_casa = mysql_real_escape_string($_REQUEST['contactos_telefono_casa']);
  $contactos_telefono_trabajo = mysql_real_escape_string($_REQUEST['contactos_telefono_trabajo']);
  $contactos_telefono_mobil = mysql_real_escape_string($_REQUEST['contactos_telefono_mobil']);
  $contactos_email = mysql_real_escape_string($_REQUEST['contactos_email']);
  $contactos_facebook = mysql_real_escape_string($_REQUEST['contactos_facebook']);
  $contactos_linkedin = mysql_real_escape_string($_REQUEST['contactos_linkedin']);
  $contactos_fecha_nacimiento = mysql_real_escape_string($_REQUEST['contactos_fecha_nacimiento']);
  $contactos_fecha_registro = mysql_real_escape_string($_REQUEST['contactos_fecha_registro']);
  $contactos_foto = mysql_real_escape_string($_REQUEST['contactos_foto']);
  $contactos_notas = mysql_real_escape_string($_REQUEST['contactos_notas']);
  $contactos_estatus = mysql_real_escape_string($_REQUEST['contactos_estatus']);
     include "./contactos/modelos/buscar.php"; 
     include "./contactos/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
