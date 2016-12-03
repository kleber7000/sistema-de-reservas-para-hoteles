 <?php  
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$reservas_id_casa.'</td> 
 <td>'.$reservas_id_contacto.'</td> 
 <td>'.$reservas_fecha_entrada.'</td> 
 <td>'.$reservas_fecha_salida.'</td> 
 <td>'.$reservas_pax.'</td> 
 <td>'.$reservas_notas.'</td> 
 <td>'.$reservas_estatus.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=reservas&c=ver&reservas_id='.$reservas_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=reservas&c=editar&reservas_id='.$reservas_id.'>Editar</a>  
                      
                </td></tr>';  