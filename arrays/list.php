<div class="titulo">Criando muitas variáveis</div>

<ul>
  <li>Podemos criar muitas variáveis com base em um array;</li>
  <li>Para isso vamos utilizar a função list;</li>
  <li>Ex: list($nome, $idade, $profissao) = $pessoa;</li>
</ul>

<?php

  $pessoa = ['Nikson', 32, 'programador', 'castanho'];

  print_r($pessoa);
  echo "<br>";

  list($nome, $idade, $profissao, $corOlhos) = $pessoa;

  echo "$nome <br>";
  echo "$idade <br>";
  echo "$profissao <br>";
  echo "$corOlhos <br>";

?>