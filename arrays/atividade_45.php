<div class="titulo">Atividade 45</div>

<ul>
  <li>Crie um array com a função range de 10 a 45;</li>
  <li>Imprima todos os números com uma soma de 6;</li>
  <li>Se passar de 30 a soma, imprima também que o número é muito alto;</li>
</ul>

<?php

  $arr = range(10, 45);

  // print_r($arr);

  foreach($arr as $numero) {
    $contador = $numero += 6;
    if($contador > 30) {
      echo "Valor do contador: $contador, é muito alto! <br>";
    } else {
      echo "Valor do contador: $contador. <br>";
    }
  }

