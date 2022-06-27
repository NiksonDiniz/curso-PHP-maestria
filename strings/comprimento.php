<div class="titulo">Tamanho da string</div>

<ul>
  <li>Utilizando a função strlen com uma string como parâmetro, vamos receber o tamanho da string;</li>
  <li>Ou seja, a quantidade de caracteres da mesma;</li>
  <li>Exemplo: <br> strlen($string);</li>
</ul>

<?php

  $str1 = "String grande aqui";
  $str2 = 'pequena';

  echo strlen($str1) . '<br>'; # 18
  echo strlen($str2) . '<br>'; # 7

?>