<div class="titulo">Switch</div>

<ul>
  <li>O switch é uma estrutura de condição, que pode substituir o if em alguns casos;</li>
  <li>Podemos adicionar a instrução break, para ele não ser mais executado;</li>
  <li>Há a possibilidade também de adicionar a instrução default, que é executada caso nenhuma condição seja satisfeita;</li>
</ul>

<?php

  $x = 10;

  switch($x) {
    case 0:
      echo "X é igual a 0. <br>";
      break;
    case 1:
      echo "X é igual a 0. <br>";
      break;
    case 2:
      echo "X é igual a 0. <br>";
      break;
    case 3:
      echo "X é igual a 0. <br>";
      break;
    default:
      echo "X não é igual a nenhum número!";
  }