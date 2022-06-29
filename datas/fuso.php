<div class="titulo">Alterando o fuso horário</div>

<ul> 
  <li>O PHP por padrão vai utilizar o fuso horário da máquina que está sendo executado, ou seja, do servidor;</li>
  <li>Porém podemos alterar manualmente o fuso com a função date_default_timezone_set;</li>
  <li>Esta função recebe como parâmetro o novo fuso horário em string;</li>
</ul>

<?php

  //date_default_timezone_set('Europe/Berlin');

  $data = new DateTime();

  print_r($data);
  echo "<br>";

