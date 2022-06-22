<div class="titulo">O que são Funções</div>

<ul>
  <li>São blocos de códigos que possuem nomes;</li>
  <li>Realizam uma ação e podem ser reaproveitadas ( chamadas novamente ) ao longo do programa;</li>
  <li>Podemos passar parâmetros para funções, que moldam a sua execução;</li>
  <li>A criação de funções reduz a duplicidade de código;</li>
  <li>E também melhora a manutenção do mesmo;</li>
  <li>O PHP possui diversas funções prontas, que podemos utilizar;</li>
</ul>

<h3>Chamando funções</h3>

<ul>
  <li>Para chamar uma função basta colocar o seu nome e abrir e fechar parênteses;</li>
  <li>Exemplo: funcaoTeste()</li>
  <li>Algumas funções exigem parâmetros;</li>
  <li>O ato de chamar uma função também é conhecido como invocar;</li>
  <li>O PHP tem diversas funções para utilizarmos no nosso código, exemplos: strlen, strtoupper, strtolower, print_r, var_dump e etc</li>
</ul>

<?php

include_once __DIR__ . "/../error.php";

// definindo função
function soma(int $a, int $b) {
  $soma = $a + $b;
  
  echo $soma . "<br>";
}

// chamando / invocando função
soma(10, 13);
soma(10, 35);

// função do php
echo strtoupper("testando função"); # TESTANDO FUNÇÃO