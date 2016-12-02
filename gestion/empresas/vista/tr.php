 <?php  
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$empresas_id_propietario.'</td> 
 <td>'.$empresas_sitio_web.'</td> 
 <td>'.$empresas_nombre.'</td> 
 <td>'.$empresas_tipo.'</td> 
 <td>'.$empresas_sector_actividad.'</td> 
 <td>'.$empresas_pais.'</td> 
 <td>'.$empresas_provincia.'</td> 
 <td>'.$empresas_ciudad.'</td> 
 <td>'.$empresas_cpostal.'</td> 
 <td>'.$empresas_direccion.'</td> 
 <td>'.$empresas_tel.'</td> 
 <td>'.$empresas_fax.'</td> 
 <td>'.$empresas_email.'</td> 
 <td>'.$empresas_twitter.'</td> 
 <td>'.$empresas_google_plus.'</td> 
 <td>'.$empresas_facebook.'</td> 
 <td>'.$empresas_linkedin.'</td> 
 <td>'.$empresas_empresa_contacto.'</td> 
 <td>'.$empresas_empresa_contacto_email.'</td> 
 <td>'.$empresas_estatus.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=empresas&c=ver&empresas_id='.$empresas_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=empresas&c=editar&empresas_id='.$empresas_id.'>Editar</a>  
                      
                </td></tr>';  