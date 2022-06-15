<div class="titulo">Variável Estática</div>

<ul>
  <li>A variável estática é declarada com a instrução static;</li>
  <li>O valor da mesma é mantido e alterado a cada execução de uma função;</li>
  <li>É interessante este comportamento pois as variáveis de escopo local sempre são resetadas;</li>
</ul>

<?php
  function teste() {
    $a = 0;
    $a++;

    echo "$a <br>";
  }

  teste();
  teste();
  teste();

  function testeStatic() {
    // o valor de $a é mantido entre chamadas de função
    static $a = 0;
    $a++;

    echo "$a <br>";
  }

  testeStatic();
  testeStatic();
  testeStatic();


