 <?php 
 $accion = "buscar"; 
 $pagina = "empresas"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $empresas_id_propietario = mysql_real_escape_string($_REQUEST['empresas_id_propietario']);
  $empresas_sitio_web = mysql_real_escape_string($_REQUEST['empresas_sitio_web']);
  $empresas_nombre = mysql_real_escape_string($_REQUEST['empresas_nombre']);
  $empresas_tipo = mysql_real_escape_string($_REQUEST['empresas_tipo']);
  $empresas_sector_actividad = mysql_real_escape_string($_REQUEST['empresas_sector_actividad']);
  $empresas_pais = mysql_real_escape_string($_REQUEST['empresas_pais']);
  $empresas_provincia = mysql_real_escape_string($_REQUEST['empresas_provincia']);
  $empresas_ciudad = mysql_real_escape_string($_REQUEST['empresas_ciudad']);
  $empresas_cpostal = mysql_real_escape_string($_REQUEST['empresas_cpostal']);
  $empresas_direccion = mysql_real_escape_string($_REQUEST['empresas_direccion']);
  $empresas_tel = mysql_real_escape_string($_REQUEST['empresas_tel']);
  $empresas_fax = mysql_real_escape_string($_REQUEST['empresas_fax']);
  $empresas_email = mysql_real_escape_string($_REQUEST['empresas_email']);
  $empresas_twitter = mysql_real_escape_string($_REQUEST['empresas_twitter']);
  $empresas_google_plus = mysql_real_escape_string($_REQUEST['empresas_google_plus']);
  $empresas_facebook = mysql_real_escape_string($_REQUEST['empresas_facebook']);
  $empresas_linkedin = mysql_real_escape_string($_REQUEST['empresas_linkedin']);
  $empresas_empresa_contacto = mysql_real_escape_string($_REQUEST['empresas_empresa_contacto']);
  $empresas_empresa_contacto_email = mysql_real_escape_string($_REQUEST['empresas_empresa_contacto_email']);
  $empresas_estatus = mysql_real_escape_string($_REQUEST['empresas_estatus']);
     include "./empresas/modelos/buscar.php"; 
     include "./empresas/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
