<div class="titulo">Atividade 46</div>

<ul>
  <li>Crie um array multidimensional com 3 arrays que tem 4 elementos cada;</li>
  <li>Imprima todos os elementos de cada um dos arrays;</li>
  <li>Imprima também quando está mudando de array;</li>
</ul>

<?php

  $matriz = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
  ];

  for($i = 0; $i < count($matriz); $i++){

    echo "Imprimindo array externo " . ($i + 1) . "<br>";

    for($j = 0; $j < count($matriz[$i]); $j++){

      echo $matriz[$i][$j] . "<br>";

    }
    
  }