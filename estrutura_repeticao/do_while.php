<div class="titulo">Do while</div>

<ul>
  <li>O do while é também uma estrutura de repetição;</li>
  <li>Porém menos utilizada que o while;</li>
  <li>A sintaxe é invertida, veja um exemplo:<br>do {<br>codigo<br>} while(condicao);</li>
</ul>

<?php
  $j = 0;

  do {
    echo "Testando do while $j <br>";

    $j++;

  } while($j < 5);

  echo "<br>";

  do {
    echo "Testando do while $j <br>";

    $j--;

  } while($j > 0);