 <?php 
  $reservas_id = mysql_real_escape_string($_POST['reservas_id']); 
  $reservas_id_casa = mysql_real_escape_string($_POST['reservas_id_casa']); 
  $reservas_id_contacto = mysql_real_escape_string($_POST['reservas_id_contacto']); 
  $reservas_fecha_entrada = mysql_real_escape_string($_POST['reservas_fecha_entrada']); 
  $reservas_fecha_salida = mysql_real_escape_string($_POST['reservas_fecha_salida']); 
  $reservas_pax = mysql_real_escape_string($_POST['reservas_pax']); 
  $reservas_precio_noche_persona = mysql_real_escape_string($_POST['reservas_precio_noche_persona']); 
  $reservas_notas = mysql_real_escape_string($_POST['reservas_notas']); 
  $reservas_estatus = mysql_real_escape_string($_POST['reservas_estatus']); 
