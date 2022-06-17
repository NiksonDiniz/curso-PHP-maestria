<div class="titulo">Atividade 20</div>

<ul>
  <li>Atribua dois números a variáveis distintas;</li>
  <li>Faça uma comparação de menor ou igual com o operador ternário;</li>
  <li>Imprima resultados para ambas as possibilidades;</li>
</ul>


<?php
  $condição = 5 > 2 ? "5 é maior que dois" : "5 é menor que 2";
  echo $condição . "<br>";

  $x = 10;
  $y = 5;

  echo $a >= $b ? "Deu true <br>" : "Deu false <br>";
  echo $a === $b ? "Deu true <br>" : "Deu false <br>";
  echo $a === $b && $a >= $b ? "Deu true <br>" : "Deu false <br>";
  echo $a === $b || $a >= $b ? "Deu true <br>" : "Deu false <br>";