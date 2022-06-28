<div class="titulo">Criando array com compact</div>

<ul>
  <li>Com a função compact podemos criar um array a partir de variáveis;</li>
  <li>Passamos para a função o nome das variáveis em string;</li>
  <li>E então um novo array é criado, podemos atribuir a uma variável;</li>
</ul>

<?php

  $marca = 'BMW';
  $motor = 3.1;
  $tetoSolar = true;
  $portas = 4;

  $carro = compact('marca', 'motor', 'tetoSolar', 'portas');

  print_r($carro);
  # Array ( [marca] => BMW [motor] => 3.1 [tetoSolar] => 1 [portas] => 4 )