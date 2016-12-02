<?php if($total_items > $total_items_por_pagina){?>
                
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for($i=1; $i<=$total_paginas; $i++){echo '<li><a href="?p='.$p.'&c='.$c.'&pag='.$i.'#">'.$i.'</a></li>'; }?>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<?php }?>