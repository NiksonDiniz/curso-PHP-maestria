<div class="titulo">Valores de escape</div>

<ul>
  <li>Podemos utilizar alguns valores que executam funções especiais em strings;</li>
  <li>Precisamos utilizar aspas duplas;</li>
  <li>Exemplos: \n = nova linha;</li>
  <li>\t = tab;</li>
  <li>\\ = barra invertida;</li>
  <li>\$ = sinal de dólar;</li>
</ul>

<?php

  // informa que é texto puro
  //header() é usado para enviar um cabeçalho HTTP bruto 
  header("Content-type: text/plain");

  // pular linha
  echo "Isso aqui na primeira linha. \n E isso na segunda linha.<br>";

  // Tab
  echo "Testando o tab \t aqui \n";
  
  // Barra invertida
  echo "Barra invertida \\ \n";

  // Imprimindo dolar
  echo "Imprimindo variável \$teste";

?>