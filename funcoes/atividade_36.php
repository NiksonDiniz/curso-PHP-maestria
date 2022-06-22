<div class="titulo">Atividade 36</div>

<ul>
  <li>Crie uma função que recebe um array de números;</li>
  <li>Crie um novo array com apenas os números que são maiores que 7;</li>
  <li>Retorne este novo array e imprima na tela;</li>
</ul>

<?php

  $arrayNum = [];

  for($i = 0; $i < 15; $i++){
    array_push($arrayNum, $i);
  }

  // print_r($arrayNum);
  
  function maiorQue7($numeros) {
    $novoArray = [];

    foreach($numeros as $numero){
      if($numero > 7) {
        array_push($novoArray, $numero);
      }
    }

    return $novoArray;

  }

  $resultado = maiorQue7($arrayNum);

  print_r($resultado);