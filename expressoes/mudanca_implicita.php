<div class="titulo">Mudança de tipo implícito</div>

<ul>
  <li>O PHP em certas operações muda o tipo de dado de forma implícita;</li>
  <li>Por exemplo 5 / 2 = 2.5 (gera um float)</li>
  <li>E 5 . 5 resulta em 55 (gera uma string, o . é o operador de concatenação)</li>
  <li>Por isso, temos que tomar cuidado com algumas expressões que podem gerar resultados indesejados;</li>
  <li>Este recurso é chamado de auto cast;</li>
</ul>

<?php
  echo 5 / 2 . "<br>"; # float 2.5
  echo 2 . 3 . "<br>"; # string 23
  var_dump(2 . 3); # string(2) "23"