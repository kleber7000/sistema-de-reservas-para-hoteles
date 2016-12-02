 <?php  
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$_usuarios_grupo.'</td> 
 <td>'.$_usuarios_nombres.'</td> 
 <td>'.$_usuarios_usuario.'</td> 
 <td>'.$_usuarios_clave.'</td> 
 <td>'.$_usuarios_estatus.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=_usuarios&c=ver&_usuarios_id='.$_usuarios_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_usuarios&c=editar&_usuarios_id='.$_usuarios_id.'>Editar</a>  
                      
                </td></tr>';  