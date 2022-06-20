<div class="titulo">Atividade 28</div>

<ul>
  <li>Crie um Loop que vai até o número 30;</li>
  <li>O contador deve iniciar como 4;</li>
  <li>Faça incrementos de 2 em 2 no contador;</li>
  <li>Utilize o break para parar o loop quando chegar no número 24;</li>
</ul>

<?php
  $x = 4;

  while($x < 30) {
    echo "\$x = $x <br>";

    if($x === 24) {
      echo "\$x = $x <br>";
      break;
    }

    $x += 2;
  }