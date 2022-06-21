<div class="titulo">Foreach</div>

<ul>
  <li>A foreach também é uma estrutura de repetição;</li>
  <li>Porém ela é orientada a um array, devemos utilizar um para que a estrutura repita em todos os elementos do mesmo;</li>
  <li>Exemplo:<br>foreach($array as $indice => $item) {<br>codigo<br>}</li>
</ul>

<?php
  $frutas = [1 => 'banana', 'laranja', 'maçã', 'melão', 'uva'];

  // sem index
  foreach($frutas as $fruta) {
    echo "$fruta <br>";
  }

  echo "<br>";

  // com index
  foreach($frutas as $indice => $fruta) {
    echo "$indice -> $fruta <br>";
  }