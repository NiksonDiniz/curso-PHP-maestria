<div class="titulo">Chaves e Valores</div>

<ul>
  <li>Com a função array_keys recebemos um array apenas com as chaves de um array;</li>
  <li>Com a função array_values recebemos um array com apenas os valores de um array;</li>
</ul>

<?php

  $carro = [
    'marca' => 'BMW',
    'motor' => 2.4,
    'teto_solar' => true,
    'cambio' => 'manual',
    'portas' => 4
  ];

  // verifica chaves
  $chaves = array_keys($carro);

  print_r($chaves); # Array ( [0] => marca [1] => motor [2] => teto_solar [3] => cambio [4] => portas )
  echo "<br>";

    // verifica valores
    $valores = array_values($carro);

    print_r($valores); # Array ( [0] => BMW [1] => 2.4 [2] => 1 [3] => manual [4] => 4 )
    echo "<br>";

?>

<div class="titulo">Verificando se valor existe</div>

<ul>
  <li>Com a função array_key_exists podemos verificar se há um valor em uma respectiva key de um array;</li>
  <li>Podemos fazer essa checagem em um if;</li>
  <li>Ex: array_key_exists(“nome”, $arr)</li>
  <li>Outra função que podemos utilizar para este fim é a isset;</li>
</ul>

<?php

  $professor = [
    'nome' => 'Matheus',
    'idade' => 29
  ];

  if(array_key_exists('nome', $professor)) {
    echo " A chave existe! <br>";
  } else {
    echo " A chave não existe! <br>";
  }

  if(array_key_exists('profissao', $professor)) {
    echo " A chave existe! <br>";
  } else {
    echo " A chave não existe! <br>";
  }

  // usando o isset() - server pra verificar se a var existe tipo isset($professor)
  if(isset($professor['nome'])) {
    echo " A chave existe! <br>";
  } else {
    echo " A chave não existe! <br>";
  }

