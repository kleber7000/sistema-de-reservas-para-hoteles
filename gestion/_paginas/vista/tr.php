 <?php  
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$_paginas_pagina.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=_paginas&c=ver&_paginas_id='.$_paginas_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_paginas&c=editar&_paginas_id='.$_paginas_id.'>Editar</a>  
                      
                </td></tr>';  