<div class="titulo">Case sensitivity</div>

<?php
/* 
  Significa sensibilidade a casas maiúsculas e minúsculas;
  Para instruções PHP não temos essa diferença, ou seja: echo = ECHO;
  Porém para variáveis são case sensitive;
  Ou seja, $nome != $NOME;
  Obs: veremos variáveis em detalhes mais adiante;
*/

# Não é case sensitivity
  echo "test <br>";
  echo 'testando 2 <br>';
  ECHO "testando 3 <br>";

# É case sensitivity
  $nome = "Pedro";

  echo $nome; // Pedro
  echo "<br>";
  echo $NOME; // error - variável não definida

