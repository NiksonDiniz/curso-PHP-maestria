<div class="titulo">Retornando o resto da string</div>

<ul>
  <li>Com a função strstr podemos encontrar um texto em uma string;</li>
  <li>Se algo for encontrado, a função vai retornar o resto da string após o texto encontrado;</li>
  <li>Se não encontrar nada retorna false;</li>
</ul>

<?php
  $str = "Testando o resto da string.";

  $resto = strstr($str, "resto");

  echo "$resto <br>"; # resto da string.

  $teste =  strstr($str, "gol") ? "Verdadeiro" : "Falso";

  echo $teste;