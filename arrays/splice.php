<div class="titulo">Removendo elementos</div>

<ul>
  <li>Podemos remover elementos de um array com a função array_splice;</li>
  <li>Passamos como parâmetro o array, índice inicial e quantos elementos queremos remover;</li>
  <li>Ex: array_splice($arr, 2, 1) => A partir do índice 2, remove 1 elemento;</li>
</ul>

<?php

  // resgatar elementos de array
  // remover elementos

  $arr = [1, 2, 3, 4, 5, 6];

  $removidos = array_splice($arr, 1, 2);

  print_r($arr); # Array ( [0] => 1 [1] => 4 [2] => 5 [3] => 6 )
  echo "<br>";

  print_r($removidos); # Array ( [0] => 2 [1] => 3 )
  echo "<br>";

  // sem especificar até onde remover
  $arr2 = [1, 2, 3, 4, 5, 6];

  $removidos2 = array_splice($arr2, 2);

  print_r($removidos2); # Array ( [0] => 3 [1] => 4 [2] => 5 [3] => 6 )
  echo "<br>";

  // sem especificar até onde remover
  $arr3 = [1, 2, 3, 4, 5, 6];

  $removidos3 = array_splice($arr3, 1, -1); // aqui o -1 seria o 6

  print_r($removidos3); # Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 )
  echo "<br>";