<div class="titulo">Limpando uma string</div>

<ul>
  <li>Podemos remover os espaços em branco de uma string com funções de PHP;</li>
  <li>trim - limpa espaços antes e depois da string;</li>
  <li>ltrim - limpa espaços da parte inicial da string;</li>
  <li>rtrim - limpa espaços da parte final da string;</li>
  <li>Desta forma conseguimos remover os espaços desnecessários inseridos pelos usuários;</li>
</ul>

<?php

  $str1 = "      Nikson     ";

  echo "Este é a string 1: $str1. <br>"; # Este é a string 1: Nikson .

  $str1Limpa = trim($str1);

  echo "Este é a string 1: $str1. <br>"; # Este é a string 1: Nikson .

  $str1Limpa2 = rtrim($str1);

  echo "Este é a string 1: $str1. <br>"; # Este é a string 1: Nikson .

?>