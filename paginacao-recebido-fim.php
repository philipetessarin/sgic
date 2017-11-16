<?php
 $pagina_anterior = $pagina - 1;
 $pagina_posterior = $pagina + 1;
?>
<div class="row">
 <ul class="pagination center ">
  <li class="waves-effect">
      <?php
      if($pagina_anterior != 0){ ?>
       <a href="usuario-principal.php?pagina=<?=$pagina_anterior?>#recebidos" aria-label="Previous">
        <span aria-hidden="true"><i class="material-icons">chevron_left</i></span>
       </a>
      <?php }else{ ?>
       <span aria-hidden="true"><i class="material-icons">chevron_left</i></span>
      <?php }  ?>
  </li>
     <?php
     for($i = 1; $i < $num_pagina + 1; $i++){?>
      <li class="active waves-effect #ff6f00 amber darken-4"><a href="usuario-principal.php?pagina=<?=$i?>#recebidos"><?=$i?></a></li>
         <?php
     }
     ?>
  <li class="waves-effect">
      <?php
      if($pagina_posterior <= $num_pagina){ ?>
       <a href="usuario-principal.php?pagina=<?=$pagina_posterior?>#recebidos" aria-label="Previous">
        <span aria-hidden="true"><i class="material-icons">chevron_right</i></span>
       </a>
      <?php }else{ ?>
       <span aria-hidden="true"><i class="material-icons">chevron_right</i></span>
      <?php }  ?>
  </li>
 </ul>
</div>