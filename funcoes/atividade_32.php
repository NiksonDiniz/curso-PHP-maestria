<div class="titulo">Atividade 31a</div>

<ul>
  <li>Crie uma função;</li>
  <li>Define três variáveis numéricas dentro dela;</li>
  <li>Exiba a multiplicação destes números com um echo;</li>
</ul>

<?php
  function multiplicar($num1, $num2, $num3) {
    $resultado = $num1 * $num2 * $num3;

    echo $resultado . "<br>";
  }

  multiplicar(1, 2, 3);
?>

<div class="titulo">Atividade 31b</div>

<ul>
  <li>Crie uma função;</li>
  <li>Define uma variável nome e sobrenome;</li>
  <li>Imprima os valores concatenados;</li>
</ul>

<?php

function nomeCompleto($nome, $sobrenome) {
  $nomeCompleto = $nome . " " . $sobrenome;

  echo $nomeCompleto . "<br>";
}

nomeCompleto("Pedro", "Molde");
