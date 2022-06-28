<div class="titulo">Adicionando dados a um array</div>

<ul>
  <li>Podemos criar novos índices com dados em um array;</li>
  <li>Basta por o nome do array com o novo índice em colchetes e atribuir um valor;</li>
  <li>Ex: $arr[1] = “teste”;</li>
  <li>E em arrays associativos basta utilizar o nome da nova chave com a atribuição de valor;</li>
</ul>

<?php

  // adicionando valores
  $arr = [];

  print_r($arr); # Array ( )
  echo "<br>";

  $arr[0] = 10; 

  print_r($arr); # Array ( [0] => 10 )
  echo "<br>";

  $arr[1] = 10;

  print_r($arr); # Array ( [0] => 10 [1] => 10 )
  echo "<br>";

  $arr[5] = 10;

  print_r($arr); # Array ( [0] => 10 [1] => 10 [5] => 10 )
  echo "<br>";
  echo "<br>";

  // modificando valores
  $arr[1] += 11; 

  print_r($arr); # Array ( [0] => 10 [1] => 21 [5] => 10 )
  echo "<br>";

  // array associativo
  $arrAssoc = [];

  print_r($arrAssoc); # Array ( )
  echo "<br>";

  $arrAssoc['carro'] = 'BMW'; 

  print_r($arrAssoc); # Array ( [carro] => BMW )
  echo "<br>";

  $arrAssoc['avião'] = 'boeing'; 

  print_r($arrAssoc); # Array ( [carro] => BMW [avião] => boeing )
  echo "<br>";
?>

<div class="titulo">Adicionando valor ao fim do array</div>

<ul>
  <li>Podemos adicionar valor ao fim de um array utilizando a atribuição sem determinar um índice;</li>
  <li>Então o valor atribuído será enviado para o último e novo índice do array;</li>
  <li>Exemplo: $arr[] = 5;</li>
</ul>

<?php

  // com array normal
  $arr[] = 28;

  print_r($arr); # Array ( [0] => 10 [1] => 21 [5] => 10 [6] => 28 )
  echo "<br>";

  // com array associativo array vazio = 'barco;
  $arrAssoc[] = 'barco'; 

  print_r($arrAssoc); # Array ( [carro] => BMW [avião] => boeing [0] => barco )
  echo "<br>";


?>

<div class="titulo">Criar array rapidamente</div>

<ul>
  <li>Podemos utilizar a função range para criar um array de forma rápida;</li>
  <li>Exemplo: range(1, 10);</li>
  <li>Um array de 1 a 10 será criado, podemos atribuir este valor a uma variável;</li>
</ul>

<?php

  $array = range(5, 10);

  print_r($array); # Array ( [0] => 5 [1] => 6 [2] => 7 [3] => 8 [4] => 9 [5] => 10 )
  echo "<br>";

  $array = range(1, 10, 2);

  print_r($array); # Array ( [0] => 1 [1] => 3 [2] => 5 [3] => 7 [4] => 9 )
  echo "<br>";

?>

