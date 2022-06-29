<div class="titulo">Métodos setDate e setTime</div>

<ul> 
  <li>Temos mais dois métodos interessantes em DateTime: setDate e setTime;</li>
  <li>setDate => Recebe ano, mês e dia, alterando completamente a data;</li>
  <li>setTime => Recebe hora, minuto e segundo, alterando o tempo da data;</li>
</ul>

<?php

  $data = new DateTime();

  # DateTime Object ( [date] => 2022-06-29 11:56:28.091433 ...)
  print_r($data);
  echo "<br>";

  $data->setDate(1999, 12, 01);

  # DateTime Object ( [date] => 1999-12-01 11:56:28.091433 ...)
  print_r($data);
  echo "<br>";

  // com a hora
  $data->setTime(05, 05, 05);

  # DateTime Object ( [date] => 1999-12-01 05:05:05.000000 ... )
  print_r($data);
  echo "<br>";

  echo $data->format('d/m/y'); # 01/12/99