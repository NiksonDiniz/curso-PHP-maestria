<div class="titulo">Arrays (conjunto, lista)</div>

<ul>
  <li>O array é um tipo de dado que serve para agrupar um conjunto de valores;</li>
  <li>Podemos inserir qualquer tipo de dado na lista;</li>
  <li>A sintaxe é: [1, 2, 3, 4, 5];</li>
  <li>Sempre entre [ ], dados separados por ,</li>
  <li>Veremos arrays em mais detalhes futuramente, é uma estrutura de dados muito importante e muito utilizada;</li>
</ul>

<?php
  // não se usa echo em array pois o echo tranforma em string
  $arr = [1, 2, 3];
  print_r($arr); # Array ( [0] => 1 [1] => 2 [2] => 3 )
  echo "<br>";
  echo $arr[2]; # 3
?>

<h2>Array Associativo</h2>

<ul>
  <li>O array associativo é basicamente um array, porém com chave e valor;</li>
  <li>A estrutura base é a mesma, mas vamos construir dessa maneira:</li>
  <li>$arr = [‘nome’ => ‘Matheus’, idade => 29]</li>
  <li>Chave entre aspas, seta para apontar o valor e valor;</li>
</ul>

<?php
    $arr1 = [1 => 1, 2, 3];
    print_r($arr1); # Array ( [1] => 1 [2] => 2 [3] => 3 )
    echo "<br>";

    $arr2 = ["nome" => "shark", "patas" => 4, "cor" => "Marrom"];
    print_r($arr2); # Array ( [nome] => shark [patas] => 4 [cor] => Marrom )
    echo "<br>";
    echo $arr2["patas"]; # 4
