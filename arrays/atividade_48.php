<div class="titulo">Atividade 48</div>

<ul>
  <li>Crie um array com os valores: batata, maçã, pera, feijão, arroz;</li>
  <li>Remova pera e feijão;</li>
</ul>

<?php

  $frutas = ["batata", "maçã", "pera", "feijão", "arroz"];

  $removidos = array_splice($frutas, 2, 2);

  print_r($removidos );
  echo "<br>";