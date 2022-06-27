<div class="titulo">Resgatando uma parte da string</div>

<ul>
  <li>Com a função substr, podemos resgatar apenas uma parte da string;</li>
  <li>Ex: substr(str, início, fim);</li>
  <li>Str é a string que vamos procurar algo;</li>
  <li>Início é o índice inicial da palavra ou texto;</li>
  <li>Fim é o índice final da palavra ou texto;</li>
</ul>

<?php

  $str = "Esta é a minha string";

  // Não modifica a string original
  // a partir do 10 pega 5 casas
  // string pai, indice inicial, comprimento da palavra
  $minha = substr($str, 10, 5);

  echo $minha . "<br>";

  $str2 = "Testando esta string abc";

  // pegará do 10 em diante
  $novaString = substr($str2, 9); // omitir comprimento = pegar ate o fim

  echo $novaString . "<br>"; # esta string abc

  $novaString2 = substr($str2, 8, -3); // comprimento negativo = remover do ultimo indice

  echo $novaString2 . "<br>"; # esta string

?>