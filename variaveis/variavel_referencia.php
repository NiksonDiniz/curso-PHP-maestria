<div class="titulo">Variável por referência</div>

<ul>
  <li>Podemos criar uma variável com referência a outra;</li>
  <li>O símbolo é =&;</li>
  <li>Se mudamos a variável de referência a referenciada muda o valor e ao contrário também gera a mudança; <br>$x = 2; <br>$y =& $x;</li>
</ul>

<?php
  // elas apontam para o mesmo lugar na memoria
  $y = 10;
  $x = & $y;

  echo $y . "<br>";
  echo $x . "<br>";

  echo "Após referência <br>";
  $y = 15;
  echo $y . "<br>";
  echo $x . "<br>";