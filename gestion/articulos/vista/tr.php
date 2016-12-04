 <?php  
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$articulos_id_tipo.'</td> 
 <td>'.$articulos_titulo.'</td> 
 <td>'.$articulos_fecha_registro.'</td> 
 <td>'.$articulos_estatus.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=articulos&c=ver&articulos_id='.$articulos_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=articulos&c=editar&articulos_id='.$articulos_id.'>Editar</a>  
                      
                </td></tr>';  