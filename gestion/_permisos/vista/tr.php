 <?php  
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$_permisos_grupo.'</td> 
 <td>'.$_permisos_pagina.'</td> 
 <td>'.$_permisos_permiso.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=_permisos&c=ver&_permisos_id='.$_permisos_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_permisos&c=editar&_permisos_id='.$_permisos_id.'>Editar</a>  
                      
                </td></tr>';  