<div class="titulo">Atividade 07</div>

<ul>
  <li>Crie um arquivo PHP;</li>
  <li>Crie um array associativo com características de uma pessoa;</li>
  <li>Desafio: faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja;</li>
</ul>

<?php

  $pessoa = [
    'altura' => 1.72,
    'idade' => 32,
    'peso' => 65,
  ];

  if($pessoa['idade'] >= 18){
    echo " Esta pessoa é maior de idade <br>";
  } else {
    echo " Esta pessoa é menor de idade <br>";
  }