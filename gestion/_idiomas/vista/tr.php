 <?php  
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$_idiomas_idioma.'</td> 
 <td>'.$_idiomas_nombre.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=_idiomas&c=ver&_idiomas_id='.$_idiomas_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_idiomas&c=editar&_idiomas_id='.$_idiomas_id.'>Editar</a>  
                      
                </td></tr>';  