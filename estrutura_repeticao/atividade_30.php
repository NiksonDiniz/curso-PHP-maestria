<div class="titulo">Atividade 30a</div>

<ul>
  <li>Crie um array com números de 1 a 20;</li>
  <li>Crie um loop for para este array;</li>
  <li>Imprima apenas os pares;</li>
</ul>

<?php

  $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
  $limite = count($arr);

  for($i = 0; $i < $limite; $i++) {
    if($arr[$i] % 2 === 0){
      echo "Pares: $arr[$i] <br>";
    }
  }
?>

<div class="titulo">Atividade 30b</div>

<ul>
  <li>Crie um array com números de 1 a 10;</li>
  <li>Utilize um loop for para criar este array;</li>
  <li>Dica: você pode utilizar o método array_push(arr, elemento) para inserir um elemento em um array;</li>
  <li>Imprima o array criado com print_r;</li>
</ul>

<?php

  $arr1 = [];

  for($i = 0; $i < 10; $i++) {
    array_push($arr1, $i);
  }
  
  print_r($arr1);

?>

<div class="titulo">Atividade 30c</div>

<ul>
  <li>Crie um array de 10 a 20 com for;</li>
  <li>Faça um loop em cima do array criado dinamicamente;</li>
  <li>Imprima apenas os números ímpares;</li>
</ul>

<?php

  $arr3 = [];

  for($i = 10; $i <= 20; $i++) {
    array_push($arr3, $i);
  }

  print_r($arr3);

  echo "<br>";
  echo "<br>";

  for($i = 0; $i < count($arr3); $i++) {
    if($arr3[$i] % 2 !== 0) {
      echo "$arr3[$i] <br>";
    }
  }
