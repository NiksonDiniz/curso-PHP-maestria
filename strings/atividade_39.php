<div class="titulo">Atividade 39</div>

<ul>
  <li>Crie uma função que recebe características de algum objeto como argumento (carro, sofá, cafeteira), em array associativo;</li>
  <li>O array deve conter nome => preco;</li>
  <li>Retorne apenas os itens que custam mais que R$10;</li>
  <li>Imprima o retorno;</li>
</ul>

<?php
include_once __DIR__ . "/../error.php";

  $mercado = ['carne' => 100, 'café' => 15, 'arroz' => 30, 'feijão' => 25];

  function intensMercado($itens) {
    foreach($itens as $index => $item) {
      if($item > 10){
        echo "$index : $item <br>";
      }
    }

  }

  intensMercado($mercado);
?>