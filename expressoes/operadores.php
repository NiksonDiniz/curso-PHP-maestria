<div class="titulo">O que é um operador?</div>

<ul>
  <li>Operadores são recursos que utilizamos para compor expressões mais complexas;</li>
  <li>Alguns deles: +, -, **, /, ++, >, <, >=, <= e etc…</li>
  <li>Estas operações podem matemáticas ou até mesmo comparações;</li>
  <li>A ideia principal é que um novo valor é gerado ou também um booleano pode ser retornado;</li>
</ul>

<div class="titulo">Ordem dos operadores</div>

<ul>
  <li>O PHP e as linguagens de programação executam os operadores na mesma ordem que na matemática;</li>
  <li>Ou seja em: 2 + 2 * 4, teremos o resultado de 10;</li>
  <li>Pois a multiplicação é avaliada antes da soma;</li>
  <li>Mesmo que a primeira operação seja soma;</li>
  <li>Podemos utilizar ( ) para separar operações;</li>
</ul>

<div class="titulo">Operadores aritméticos</div>

<ul>
  <li>Temos os operadores básicos da matemática em PHP;</li>
  <li>Soma: +</li>
  <li>Subtração: -</li>
  <li>Divisão: /</li>
  <li>Multiplicação: *</li>
</ul>

<?php
  echo 3 + 2 * 5 . "<br>"; # 13
  echo (3 + 2) * 5 . "<br>"; # 25
  echo 5 + 2 / 15 . "<br>"; # 5.13333

  $a = 2;
  $b = 4;
  $c = 6;

  echo $a + $b / $c . "<br><br>"; # 2.6666

?>

<div class="titulo">Auto incremento e auto decremento</div>

<ul>
  <li>Podemos incrementar um valor ou decrementar com os operadores: ++ e --;</li>
  <li>Exemplo: $n++ ou $x--</li>
  <li>Onde n e x são variáveis, e terão seus valores alterados com +1 e -1;</li>
  <li>Estes operadores são muito utilizados em estruturas de repetição;</li>
</ul>

<?php
  $x = 0;
  $y = 0;

  echo $x++ . "<br>";

  $y = $y + 1;

  echo $y . "<br><br>";

  echo $x-- . "<br>";

  $y = $y - 1;

  echo $y . "<br><br>";

?>

<div class="titulo">Operadores de comparação</div>

<ul>
  <li>As operações com operadores de comparação resultarão em true or false;</li>
  <li>Igualdade: ==</li>
  <li>Idêntico a: ===</li>
  <li>Diferença: !=</li>
  <li>Não idêntico a: !==</li>
  <li>Maior e maior ou igual a: > e >=</li>
  <li>Menor e menor ou igual a: < e <=</li>
</ul>

<div class="titulo">Operador de igualdade</div>

<ul>
  <li>Com o operador de igualdade verificamos se um valor é igual ao outro;</li>
  <li>O símbolo é: ==</li>
  <li>Exemplo: 5 == 4 # false</li>
  <li>Exemplo: 3 == 3 # true</li>
</ul>

<?php
  echo (3 == 3); # 1 - true
  echo (3 == 4); # não retorna nada - false
?>