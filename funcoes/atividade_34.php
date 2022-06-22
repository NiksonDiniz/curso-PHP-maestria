<div class="titulo">Atividade 34</div>

<ul>
  <li>Crie uma função que verifica se um número é par ou ímpar;</li>
  <li>Se for par imprima uma mensagem;</li>
  <li>Se for ímpar imprima uma mensagem;</li>
</ul>

<?php

  function parOuImpar($numero) {
    $ePAr = $numero % 2 === 0;
    if($ePAr) {
      echo " O número $numero é par <br>";
    } else {
      echo " O número $numero é ímpar <br>";
    }
  }

  parOuImpar(10);
  parOuImpar(11);