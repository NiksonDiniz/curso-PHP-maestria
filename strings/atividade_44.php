<div class="titulo">Atividade 44</div>

<ul>
  <li>Converta a seguinte array para uma string:</li>
  <li>[“O”, “PHP”, “é”, “muito”, “legal”]</li>
</ul>

<?php

  $arr = ['O', 'PHP', 'é', 'muito', 'legal.'];

  echo implode(" ",$arr) . "<br>"; # O PHP é muito legal

?>