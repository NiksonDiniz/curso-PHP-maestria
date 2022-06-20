<div class="titulo">Atividade 27</div>

<ul>
  <li>Crie um array com valores inteiros de 10 a 100</li>
  <li>Aplique um loop neste array;</li>
  <li>Quando entrar os valores 30 ou 40, pule para a próxima execução;</li>
</ul>

<?php 
  $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
  $t = count($arr);
  $i = 0;

  while($i < $t) {

    if($arr[$i] === 30 || $arr[$i] === 40) {

      $i++;

      continue;

    }

    echo "Elemento $arr[$i] <br>";

    $i++;
  }
