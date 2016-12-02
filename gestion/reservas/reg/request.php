 <?php 
  $reservas_id = mysql_real_escape_string($_REQUEST['reservas_id']); 
  $reservas_id_casa = mysql_real_escape_string($_REQUEST['reservas_id_casa']); 
  $reservas_id_contacto = mysql_real_escape_string($_REQUEST['reservas_id_contacto']); 
  $reservas_fecha_inicio = mysql_real_escape_string($_REQUEST['reservas_fecha_inicio']); 
  $reservas_fecha_fin = mysql_real_escape_string($_REQUEST['reservas_fecha_fin']); 
  $reservas_pax = mysql_real_escape_string($_REQUEST['reservas_pax']); 
  $reservas_estatus = mysql_real_escape_string($_REQUEST['reservas_estatus']); 
