<div class="titulo">Instruções de código</div>

<ol>
  <li>As instruções simples de PHP são separadas por ponto e vírgula;</li>
  <li>Instruções simples são instruções de uma linha;</li>
  <li>Quando há uma instrução maior, como de condição ou repetição, a definição da mesma é dada por abertura e fechamento de chaves;</li>
  <li>Nestes casos não precisaremos de ponto e vírgula;</li>
</ol>

<?php

  echo "Uma linha <br>";
  echo "Outra de uma linha <br>";

  if(5 > 2) {
    echo "Dentro do if";
  }