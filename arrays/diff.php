<div class="titulo">Diferença entre arrays</div>

<ul>
  <li>Podemos verificar qual a diferença entre dois ou mais arrays com PHP;</li>
  <li>A função que vamos utilizar para isso é a array_diff;</li>
  <li>Esta função aceita um número indeterminado de arrays;</li>
</ul>

<?php

  $arr1 = [1, 2, 3, 4, 5, 11];
  $arr2 = [1, 2, 6, 8, 9, 10];

  $arrayDiff = array_diff($arr1, $arr2);
  # Array ( [2] => 3 [3] => 4 [4] => 5 [5] => 11 )

  print_r($arrayDiff);