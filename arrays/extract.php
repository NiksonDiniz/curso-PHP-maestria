<div class="titulo">Criando variáveis com extract</div>

<ul>
  <li>Com a função extract podemos criar variáveis rapidamente de arrays associativos;</li>
  <li>O nome da chave será o nome da variável;</li>
  <li>Se houver uma variável já criada com o nome da chave, a mesma será sobrescrita;</li>
</ul>

<?php

  // exemplo 1
  $arr = [
    'cor' => 'vermelho',
    'forma' => 'retângulo',
    'material' => 'aço'
  ];

  extract($arr);

  echo "$cor <br>";
  echo "$forma <br>";
  echo "$material <br>";

  // exemplo 2
  $nome = 'Nikson';

  echo "$nome <br>";

  $pessoa = [
    'nome' => 'Maurici',
    'idade' => 30
  ];
  
  extract($pessoa);

  echo "$nome <br>";
  echo "$idade <br>";
