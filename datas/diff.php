<div class="titulo">Diferenças entre datas</div>

<ul> 
  <li>Podemos calcular a diferença entre duas datas com o método diff;</li>
  <li>O resultado pode ser formatado com format;</li>
  <li>Exemplo: <br>
      $diferenca = $dateA->diff($dateB);
  </li>
</ul>

<?php

  $data1 = new DateTime();
  $data2 = new DateTime();

  $data1->setDate(2000, 03, 15);
  $data2->setDate(2010, 03, 15);

  echo $data1->format('d/m/Y'). "<br>";
  echo $data2->format('d/m/Y'). "<br>";

  $diferenca = $data1->diff($data2);

  # DateInterval Object ( [y] => 10 [m] => 0 [d] => 0 [h] => 0 [i] => 0 [s] => 0 ...
  print_r($diferenca);
  echo "<br>";

  echo $diferenca->format("%a days") . "<br>"; # 3652 days
