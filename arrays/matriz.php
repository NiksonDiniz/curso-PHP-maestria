<div class="titulo">Array multidimensional</div>

<ul>
  <li>Quando inserimos arrays dentro de arrays formamos um array multidimensional, também conhecido como matriz;</li>
  <li>Para acessar este tipo de array também utilizamos índices, acessando o externo e depois os internos;</li>
  <li>Ex: $arr[1][0] => Primeiro elemento do segundo array;</li>
</ul>

<?php

  $arr = [
    [1, 2, 3],
    [4, 5, 6]
  ];

  # Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [0] => 4 [1] => 5 [2] => 6 ) )
  print_r($arr);
  echo "<br>";

  echo $arr[1][0] . "<br>"; // 4 acessando segundo array e primeiro elemento
  echo $arr[0][2] . "<br>"; // 3 acessando primeiro array e terceiro elemento

  echo count($arr) . "<br>"; # 2
  echo count($arr[0]) . "<br>"; # 3
