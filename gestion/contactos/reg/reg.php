 <?php 
  $contactos_id = $contactos['id']; 
  $contactos_id_manager = $contactos['id_manager']; 
  $contactos_sexo = $contactos['sexo']; 
 $contactos_sexo_0 = "";   $contactos_sexo_1 = "";      if($contactos_sexo==0){
      $contactos_sexo_0 = " checked "; 
      $contactos_sexo_1 = ""; 
  }else {
      $contactos_sexo_0 = ""; 
      $contactos_sexo_1 = "checked";       
  }  
  $contactos_nombres = $contactos['nombres']; 
  $contactos_apellidos = $contactos['apellidos']; 
  $contactos_cedula = $contactos['cedula']; 
  $contactos_pais = $contactos['pais']; 
  $contactos_provincia = $contactos['provincia']; 
  $contactos_ciudad = $contactos['ciudad']; 
  $contactos_direccion = $contactos['direccion']; 
  $contactos_cpostal = $contactos['cpostal']; 
  $contactos_email = $contactos['email']; 
  $contactos_facebook = $contactos['facebook']; 
  $contactos_linkedin = $contactos['linkedin']; 
  $contactos_fecha_nacimiento = $contactos['fecha_nacimiento']; 
  $contactos_fecha_registro = $contactos['fecha_registro']; 
  $contactos_foto = $contactos['foto']; 
  $contactos_estatus = $contactos['estatus']; 
