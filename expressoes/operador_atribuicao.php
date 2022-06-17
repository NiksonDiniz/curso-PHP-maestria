<div class="titulo">Operadores de atribuição</div>

<ul>
  <li>Com estes operadores podemos atribuir valor a uma variável;</li>
  <li>O mais conhecido é o =, porém temos algumas variações do mesmo;</li>
  <li>Operadores: +=, -=, /=, *= e %=;</li>
  <li>Cada um destes fará uma operação antes da atribuição;</li>
</ul>

<?php 
  // +=
  $a = 0;
  $a += 10; # $a = $a + 10
  echo "$a <br>";

  // -=
  $b = 10;
  $b -= 5; # $b = $b - 5
  echo "$b <br>"; # 5

  // *=
  $c = 10;
  $c *= 5; # $c = $c * 5
  echo "$c <br>"; # 5

  // /=
  $d = 10;
  $d /= 5; # $d = $d / 5
  echo "$d <br>"; # 2

  // %=
  $d = 10;
  $d %= 5; # $d = $d % 5
  echo "$d <br><br>"; # 2
?>


<div class="titulo">Operador ternário</div>

<ul>
  <li>Este operador constitui uma estrutura de condição resumida;</li>
  <li>Na maioria dos casos vamos optar por if/else;</li>
  <li>Porém em situações simples podemos utilizar o ternário;</li>
  <li>Exemplo: 5 > 2 ? echo “5 é maior que dois” : echo “5 é menor que 2”</li>
  <li>A primeira interrogação vem antes da comparação;</li>
  <li>E o : é utilizado para uma segunda situação, caso a primeira seja falsa;</li>
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