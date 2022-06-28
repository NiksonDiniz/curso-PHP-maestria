<div class="titulo">Atividade 47</div>

<ul>
  <li>Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, Teto solar, automático;</li>
  <li>Chame este array de carro;</li>
  <li>Crie variáveis com base neste array;</li>
  <li>list() não funciona com strings</li>
</ul>

<?php

  $carro = ['jaguar', 3.0, 'azul', 18, 'teto solar', 'automático'];

  list($marca, $motor, $cor, $aro, $opcional, $cambio) = $carro;

  echo $marca . "<br>";
  echo $motor . "<br>";
  echo $cor . "<br>";
  echo $aro . "<br>";
  echo $opcional . "<br>";
  echo $cambio . "<br>";

  print_r($carro);