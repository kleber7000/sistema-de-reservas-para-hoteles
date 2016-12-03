 <?php 
  $reservas_id = mysql_real_escape_string($_REQUEST['reservas_id']); 
  $reservas_id_casa = mysql_real_escape_string($_REQUEST['reservas_id_casa']); 
  $reservas_id_contacto = mysql_real_escape_string($_REQUEST['reservas_id_contacto']); 
  $reservas_fecha_entrada = mysql_real_escape_string($_REQUEST['reservas_fecha_entrada']); 
  $reservas_fecha_salida = mysql_real_escape_string($_REQUEST['reservas_fecha_salida']); 
  $reservas_pax = mysql_real_escape_string($_REQUEST['reservas_pax']); 
  $reservas_notas = mysql_real_escape_string($_REQUEST['reservas_notas']); 
  $reservas_estatus = mysql_real_escape_string($_REQUEST['reservas_estatus']); 
