<div class="titulo">Unindo arrays</div>

<ul>
  <li>Podemos unir arrays, a ação também é conhecida como merge;</li>
  <li>A função que vamos utilizar é a array_merge;</li>
  <li>Que como argumento aceita um número indeterminado de arrays;</li>
</ul>

<?php

  include_once __DIR__ . "/../error.php";

  $arr1 = [1, 2];
  $arr2 = ['abc', 'def'];
  $arr3 = [4.5, 8.6];

  $arrMerge = array_merge($arr1, $arr2, $arr3);

  print_r($arrMerge);
  # Array ( [0] => 1 [1] => 2 [2] => abc [3] => def [4] => 4.5 [5] => 8.6 )
  echo "<br>";