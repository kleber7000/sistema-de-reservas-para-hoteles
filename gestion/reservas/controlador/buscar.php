 <?php 
 $accion = "buscar"; 
 $pagina = "reservas"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 $reservas_id_casa = mysql_real_escape_string($_REQUEST['reservas_id_casa']);
  $reservas_id_contacto = mysql_real_escape_string($_REQUEST['reservas_id_contacto']);
  $reservas_fecha_entrada = mysql_real_escape_string($_REQUEST['reservas_fecha_entrada']);
  $reservas_fecha_salida = mysql_real_escape_string($_REQUEST['reservas_fecha_salida']);
  $reservas_pax = mysql_real_escape_string($_REQUEST['reservas_pax']);
  $reservas_precio_noche_persona = mysql_real_escape_string($_REQUEST['reservas_precio_noche_persona']);
  $reservas_notas = mysql_real_escape_string($_REQUEST['reservas_notas']);
  $reservas_estatus = mysql_real_escape_string($_REQUEST['reservas_estatus']);
     include "./reservas/modelos/buscar.php"; 
     include "./reservas/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
