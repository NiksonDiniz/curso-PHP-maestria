<div class="titulo">Estrutura if</div>
<ul>
  <li>A estrutura if checa se uma expressão é verdadeira;</li>
  <li>Podemos incluir operadores lógicos nas expressões;</li>
  <li>Exemplo: if(expressão) { // bloco de código }</li>
</ul>

<div class="titulo">Estrutura else</div>
<ul>
  <li>A estrutura else pode executar um outro bloco de código, isso acontece quando a expressão de if é falsa;</li>
  <li>Em else não inserimos expressões;</li>
  <li>Exemplo: <br> if (exp) { <br> } else { <br> }</li>
</ul>

<?php
  // condição true
  if(5 > 2) {
    echo "Condição do if true <br>";
  } else {
    echo "Condição do if false <br>";
  }

  // condição false
  if(5 < 2) {
    echo "Condição do if true <br>";
  } else {
    echo "Condição do if false <br>";
  }

  // utilizando operador lógico
  if(10 === 10 && 9 > 3) {
    echo "Condição do if true <br>";
  } else {
    echo "Condição do if false <br>";
  }
