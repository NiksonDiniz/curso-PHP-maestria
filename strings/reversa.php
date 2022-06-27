<div class="titulo">String reversa</div>

<ul>
  <li>Podemos com PHP inverter uma string, a função strrev realiza esta ação;</li>
  <li>Ela recebe a string que será invertida como parâmetro;</li>
</ul>

<?php

  $palavra = "Testando";
  $palavraInvertida = strrev($palavra);

  echo "$palavra <br>";
  echo "$palavraInvertida <br>";

  $frase = "O programador estava sem internet";
  $fraseInvertida = strrev($frase);

  echo "$frase <br>";
  echo "$fraseInvertida <br>";

