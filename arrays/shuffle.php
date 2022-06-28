<div class="titulo">Ordem aleatório de itens</div>

<ul>
  <li>Com a função shuffle podemos reorganizar os itens em ordem aleatória;</li>
  <li>Passamos apenas o array como parâmetro;</li>
  <li>Temos um array retornado em ordem aleatória;</li>
</ul>

<?php

  $arr = range(1, 10);

  shuffle($arr);

  // modifica array original
  # Array ( [0] => 9 [1] => 7 [2] => 8 [3] => 4 [4] => 5 [5] => 1 [6] => 10 [7] => 2 [8] => 6 [9] => 3 )
  print_r($arr);
  echo "<br>";