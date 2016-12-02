 <?php  
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$casas_id_empresa.'</td> 
 <td>'.$casas_casa.'</td> 
 <td>'.$casas_capacidad.'</td> 
 <td>'.$casas_estatus.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=casas&c=ver&casas_id='.$casas_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=casas&c=editar&casas_id='.$casas_id.'>Editar</a>  
                      
                </td></tr>';  