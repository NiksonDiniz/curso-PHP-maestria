<div class="titulo">Retorno de função</div>

<ul>
  <li>Normalmente funções retornam algo, para isso utilizamos a instrução return;</li>
  <li>O objetivo é armazenar o valor de retorno em uma variável e utilizá-lo posteriormente no código;</li>
  <li>function x(a, b) {<br>return algumaCoisa;<br>}</li>
</ul>

<?php
  function soma($n1, $n2) {

    return $n1 + $n2;

  }

  echo soma(4,6) . "<br>";

  $x = soma(2,5);

  echo $x . "<br>";

  $y = soma(4,3);

  echo $y . "<br>";

  // 
  function testeRetorno() {
    return "testando";
  }

  $z = testeRetorno();

  echo $z;