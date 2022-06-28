<div class="titulo">Número de elementos</div>

<ul>
  <li>Podemos obter o número de elementos de um array com a função count;</li>
  <li>Basta passar o array como argumento;</li>
  <li>Um inteiro será retornado;</li>
</ul>

<?php

  $arr = range(1, 10, 2);

  print_r($arr); # Array ( [0] => 1 [1] => 3 [2] => 5 [3] => 7 [4] => 9 )
  echo "<br>";

  echo count($arr) ."<br>"; # 5

?>