<div class="titulo">Dividindo arrays</div>

<ul>
  <li>Podemos dividir um array grande em diversos arrays de número de elementos iguais;</li>
  <li>Vamos utilizar a função array_chunk;</li>
  <li>Passamos o array como argumento e também o número de elementos que cada array deve ter;</li>
</ul>

<?php

  $arr = range(1, 20);

  // print_r(array_chunk($arr, 5));
  // echo "<br>";

  $arrays = array_chunk($arr, 4);

  // print_r($arrays);
  // echo "<br>";

  for($i = 0; $i < count($arrays); $i++){
    echo "Array externo " . ($i + 1) . "<br>";
    for($j = 0; $j < count($arrays[$i]); $j++) {
      echo $arrays[$i][$j] . "<br>";
    }
  }