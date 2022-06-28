<div class="titulo">Somando itens de um array</div>

<ul>
  <li>Para somar os itens de um array utilizamos a função array_sum;</li>
  <li>Ela nos retorna a soma de todos elementos numéricos do array que passamos como argumento;</li>
</ul>

<?php

  $arr = [1, 32, 45, 10, 22, "string"];

  $soma = array_sum($arr);

  print_r($arr); #Array ( [0] => 1 [1] => 32 [2] => 45 [3] => 10 [4] => 22 [5] => string )
  echo "<br>" . $soma . "<br>"; # 110 ignora o que não é número
  
