<div class="titulo">Exercício 49</div>

<ul>
  <li>Crie variáveis com característica de algum objeto ou animal;</li>
  <li>Depois crie um array com compact com estas mesmas variáveis;</li>
  <li>Faça um loop no array e imprima os valores;</li>
</ul>

<?php

  $nome = 'Brutius';
  $cor = 'cinza';
  $raca = 'vira_latas';
  $feroz = 'sim';

  $cachorro = compact('nome', 'cor', 'raca', 'feroz');

  print_r($cachorro);
  echo "<br>";

  foreach($cachorro as $index => $caracteristicas) {
    echo "$index : $caracteristicas <br>";
  }