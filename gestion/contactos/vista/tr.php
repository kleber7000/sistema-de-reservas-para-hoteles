 <?php  
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$contactos_id_manager.'</td> 
 <td>'.$contactos_sexo.'</td> 
 <td>'.$contactos_nombres.'</td> 
 <td>'.$contactos_apellidos.'</td> 
 <td>'.$contactos_cedula.'</td> 
 <td>'.$contactos_pais.'</td> 
 <td>'.$contactos_provincia.'</td> 
 <td>'.$contactos_ciudad.'</td> 
 <td>'.$contactos_direccion.'</td> 
 <td>'.$contactos_cpostal.'</td> 
 <td>'.$contactos_telefono_casa.'</td> 
 <td>'.$contactos_telefono_trabajo.'</td> 
 <td>'.$contactos_telefono_mobil.'</td> 
 <td>'.$contactos_email.'</td> 
 <td>'.$contactos_facebook.'</td> 
 <td>'.$contactos_linkedin.'</td> 
 <td>'.$contactos_fecha_nacimiento.'</td> 
 <td>'.$contactos_fecha_registro.'</td> 
 <td>'.$contactos_foto.'</td> 
 <td>'.$contactos_notas.'</td> 
 <td>'.$contactos_estatus.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=contactos&c=ver&contactos_id='.$contactos_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=contactos&c=editar&contactos_id='.$contactos_id.'>Editar</a>  
                      
                </td></tr>';  