<div class="titulo">Loop dentro de loop</div>

<ul>
  <li>Como nas estruturas de if, podemos adicionar um loop dentro de outro;</li>
  <li>O contador deve ser único, para que um loop não afete o outro;</li>
  <li>O loop interno será executado tantas vezes quanto o loop externo for;</li>
  <li>E em cada uma das suas execuções, serão passadas todas as suas etapas;</li>
</ul>

<?php
  $i = 1;

  while($i <= 5){
    echo "Loop externo $i <br>";

    $j = 1;

    while($j <= 2){
      echo "Loop interno $j <br>";

      $j++;
    }

    $i++;
  }