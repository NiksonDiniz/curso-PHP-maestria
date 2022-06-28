<div class="titulo">Foreach e arrays</div>

<ul>
  <li>Anteriormente vimos a estrutura foreach com arrays, podemos iterar facilmente com ela;</li>
  <li>Utilizando a notação de chave => valor, temos acesso rápido também a arrays associativos;</li>
  <li>Exemplo: foreach($itens as $key => $value) { }</li>
</ul>

<?php

  $pessoa = [
    'nome' => 'Goku',
    'idade' => 30,
    'cabelo' => 'preto'
  ];

  foreach($pessoa as $chave => $valor) {
    echo "$chave => $valor <br>";
  }
?>