 <?php  
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$tipos_contenido_tipo.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=tipos_contenido&c=ver&tipos_contenido_id='.$tipos_contenido_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=tipos_contenido&c=editar&tipos_contenido_id='.$tipos_contenido_id.'>Editar</a>  
                      
                </td></tr>';  