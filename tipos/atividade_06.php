<div class="titulo">Atividade 06</div>

<ul>
  <li>Crie um arquivo PHP;</li>
  <li>Crie um array com características de um carro;</li>
  <li>Imprima duas características;</li>
</ul>

<?php
  $carro = ['marca' => 'honda', 'modelo' => 'civic', 'cor' => 'preto'];

  echo " O carro de marca "
  . $carro['marca'] 
  . " e modelo " 
  . $carro['modelo'] 
  . " é de cor " 
  . $carro['cor'];

  echo "<br>";

  // resposta do professor
  $carro1 = [
    'marca' => 'BMW',
    'rodas' => 4,
    'teto_solar' => true,
    'velocidade_maxima' => 300,
    'blindado' => false
  ];

  print_r($carro1);

  $marca = $carro1['marca'];
  echo "<br>";

  echo " O carro é de marca $marca";