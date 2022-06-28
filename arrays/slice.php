<div class="titulo">Resgatando elementos de array</div>

<ul>
  <li>Com a função array_slice podemos resgatar uma faixa de elementos de um array;</li>
  <li>Passamos 3 parâmetros: o array, índice inicial e quantos elementos queremos resgatar a partir do índice;</li>
</ul>

<?php

  $arr = range(2, 18, 2);

  print_r($arr);
  echo "<br>";

  // pega a partir do index 1, 3 elementos 
  $slice1 = array_slice($arr, 1, 3);

  print_r($slice1); # Array ( [0] => 4 [1] => 6 [2] => 8 )
  echo "<br>";

  // pega a partir do index 4, 4 elementos 
  $slice1 = array_slice($arr, 4, 4); 

  print_r($slice1); # Array ( [0] => 10 [1] => 12 [2] => 14 [3] => 16 )
  echo "<br>";

  // pega a partir do index 4, todos
  $slice1 = array_slice($arr, 4); 

  print_r($slice1); # Array ( [0] => 10 [1] => 12 [2] => 14 [3] => 16 [4] => 18 )
  echo "<br>";

  // pega a partir do index 4, negativos
  $slice1 = array_slice($arr, 4, -3); 

  print_r($slice1); # Array ( [0] => 10 [1] => 12 )
  echo "<br>";
      