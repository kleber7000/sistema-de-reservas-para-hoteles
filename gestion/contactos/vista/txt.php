 <?php $html = "
contactos_id : %contactos_id%
contactos_id_manager : %contactos_id_manager%
contactos_sexo : %contactos_sexo%
contactos_nombres : %contactos_nombres%
contactos_apellidos : %contactos_apellidos%
contactos_cedula : %contactos_cedula%
contactos_pais : %contactos_pais%
contactos_provincia : %contactos_provincia%
contactos_ciudad : %contactos_ciudad%
contactos_direccion : %contactos_direccion%
contactos_cpostal : %contactos_cpostal%
contactos_telefono_casa : %contactos_telefono_casa%
contactos_telefono_trabajo : %contactos_telefono_trabajo%
contactos_telefono_mobil : %contactos_telefono_mobil%
contactos_email : %contactos_email%
contactos_facebook : %contactos_facebook%
contactos_linkedin : %contactos_linkedin%
contactos_fecha_nacimiento : %contactos_fecha_nacimiento%
contactos_fecha_registro : %contactos_fecha_registro%
contactos_foto : %contactos_foto%
contactos_notas : %contactos_notas%
contactos_estatus : %contactos_estatus%
";

                include "./contactos/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>