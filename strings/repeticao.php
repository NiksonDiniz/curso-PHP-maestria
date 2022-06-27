<div class="titulo">Repetição de string</div>

<ul>
  <li>Com a função str_repeat você pode repetir n vezes uma determinada string;</li>
  <li>O primeiro argumento é a string que será repetida;</li>
  <li>O segundo é o número de repetições;</li>
</ul>

<?php
  $str = "Teste <br>";

  $strRepetida = str_repeat($str, 5);

  echo $strRepetida;