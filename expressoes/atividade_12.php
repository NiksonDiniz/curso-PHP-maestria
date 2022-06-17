<div class="titulo">Atividade 12</div>

<ul>
  <li>Crie um arquivo PHP;</li>
  <li>Crie uma operação com cada um dos operadores básicos;</li>
  <li>Cada operação deve estar em uma variável diferente;</li>
  <li>Imprima cada uma das etapas;</li>
  <li>Ex: soma -> multiplicação -> divisão -> subtração;</li>
</ul>

<?php
  $a = 10.0;
  $b = 20;
  $c = 30.0;
  $d = 40;

  $soma = $a + $b;
  $multiplicacao = $c * $d;
  $divisao = $d / $b;
  $subtracao = $c - $b;

  echo " A soma de $a + $b = $soma <br>";
  echo " A multiplicação de $c * $d = $multiplicacao <br>";
  echo " A divisão de $d / $b = $divisao <br>";
  echo " A subtração de $c - $b = $subtracao <br>";