<div class="titulo">Alterando o case</div>

<ul>
  <li>Podemos alterar as strings para maiúsculas ou minúsculas com funções de PHP;</li>
  <li>strtolower - todas as letras minúsculas;</li>
  <li>strtoupper - todas as letras maiúsculas;</li>
</ul>

<?php

  $str1 = "string em caixa baixa";

  echo strtoupper($str1) . "<br>"; # STRING EM CAIXA BAIXA

  $str2 = "STRING EM CAIXA ALTA";

  echo strtolower($str2) . "<br>"; # string em caixa alta

?>

<div class="titulo">Alterando o case de palavras</div>

<ul>
  <li>Podemos alterar o case apenas das palavras com funções de PHP;</li>
  <li>ucfirst - primeira letra da string em maiúscula;</li>
  <li>ucwords - primeira letra de cada palavra em maiúscula;</li>
</ul>

<?php

  $str1 = "palavras palavras palavras";

  // Primeira letra fica maiúscula
  echo ucfirst($str1) . "<br>"; # Palavras palavras palavras

  //Primeira letra de cada palavra fica maiúscula
  echo ucwords($str1) . "<br>"; # Palavras Palavras Palavras

?>

