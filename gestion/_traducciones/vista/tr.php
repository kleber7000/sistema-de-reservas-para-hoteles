 <?php  
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$_traducciones_contenido_id.'</td> 
 <td>'.$_traducciones_idioma.'</td> 
 <td>'.$_traducciones_traduccion.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=_traducciones&c=ver&_traducciones_id='.$_traducciones_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_traducciones&c=editar&_traducciones_id='.$_traducciones_id.'>Editar</a>  
                      
                </td></tr>';  