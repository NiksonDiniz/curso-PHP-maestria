<div class="titulo">Buscando em arrays</div>

<ul>
  <li>A função in_array verifica se um item passado por parâmetro está no array;</li>
  <li>O retorno é true se encontrar o item e false se não encontrar;</li>
  <li>Vamos passar dois argumentos para a função, exemplo: <br> in_array(“item”, $arr)</li>
</ul>

<?php

  $frutas = ['banana', 'maçã', 'melão', 'melancia'];

  if(in_array('banana', $frutas)) {
    echo "Existe banana na cesta! <br>";
  } else {
    echo "Não existe banana na cesta! <br>";
  }

  $fruta = 'abacate';

  if(in_array($fruta, $frutas)) {
    echo "Existe $fruta na cesta! <br>";
  } else {
    echo "Não existe $fruta na cesta! <br>";
  }
?>

<div class="titulo">Ordenação de arrays</div>

<ul>
  <li>Para ordenar em ordem crescente podemos utilizar a função sort em um array;</li>
  <li>Para ordenar de forma inversa utilizamos rsort;</li>
</ul>

<?php

  $arr = [1, 5, 3, 22, 17];

  // do menor para o maior
  sort($arr);

  print_r($arr); # Array ( [0] => 1 [1] => 3 [2] => 5 [3] => 17 [4] => 22 )
  echo "<br>";

  $arr2 = [1, 5, 19, 17];

  // do maior para o menor
  rsort($arr2);

  print_r($arr2); # Array ( [0] => 19 [1] => 17 [2] => 5 [3] => 1 )
  echo "<br>";

  // com letras
  $pessoas = [
    'Pedro',
    'João',
    'Maria',
    'Alice',
  ];

  sort($pessoas);

  print_r($pessoas); # Array ( [0] => Alice [1] => João [2] => Maria [3] => Pedro )
  echo "<br>";
  echo "<br>";
?>

<div class="titulo">Ordenação de arrays associativos</div>

<ul>
  <li>Para ordenar em ordem crescente pelo valor das chaves, podemos utilizar a função arsort;</li>
  <li>Se quisermos ordenar o array pelas chaves, utilizamos o valor ksort;</li>
</ul>

<?php

  $pessoas1 = [
    'Pedro' => 14,
    'João' => 18,
    'Maria' => 22,
    'Alice' => 16,
    'Marta' => 40
  ];

  asort($pessoas1);

  # Array ( [Pedro] => 14 [Alice] => 16 [João] => 18 [Maria] => 22 [Marta] => 40 )
  // foi pela idade
  print_r($pessoas1);
  echo "<br>";

  arsort($pessoas1);

  # Array ( [Marta] => 40 [Maria] => 22 [João] => 18 [Alice] => 16 [Pedro] => 14 )
  // reverso
  // foi pela idade
  print_r($pessoas1);
  echo "<br>";

  // valores das chaves
  ksort($pessoas1);

  # Array ( [Alice] => 16 [João] => 18 [Maria] => 22 [Marta] => 40 [Pedro] => 14 )
  print_r($pessoas1);
  echo "<br>";

  // valores das chaves
  krsort($pessoas1);

  # Array ( [Pedro] => 14 [Marta] => 40 [Maria] => 22 [João] => 18 [Alice] => 16 )
  print_r($pessoas1);
  echo "<br>";