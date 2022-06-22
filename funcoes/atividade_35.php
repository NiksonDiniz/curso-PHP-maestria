<div class="titulo">Atividade 35</div>

<ul>
  <li>Crie uma função que recebe um número;</li>
  <li>Retorne o valor deste número ao quadrado;</li>
</ul>

<?php
  function aoQuadrado($numero) {
    $resultado = $numero ** 2;
    return $resultado;
  }

  echo aoQuadrado(10) . "<br>";
  echo aoQuadrado(100) . "<br>";