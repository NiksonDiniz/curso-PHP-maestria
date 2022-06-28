<div class="titulo">Invertendo arrays</div>

<ul>
  <li>Com a função array_reverse podemos obter o array ao inverso;</li>
  <li>Passamos apenas o array como argumento;</li>
  <li>O retorno será um array invertido do original;</li>
</ul>

<?php

  $arr = range(1, 5);

  $arrRev = array_reverse($arr);

  print_r($arr);
  echo "<br>";
  print_r($arrRev);
  echo "<br>";

  $arr2 = ['Goku', 12, true, [1, 2]];

  $arrRev2 = array_reverse($arr2);
  print_r($arrRev2);