<div class="titulo">Exercício 51</div>

<ul>
  <li>Crie um array associativo com chaves com valor de nomes, e valores com uma pontuação;</li>
  <li>Ordene os dados do maior para o menor;</li>
  <li>Exiba uma lista, simulando um ranking, em HTML;</li>
</ul>

<?php

  $pontuacao = [
    'Pedro' => 9,
    'Ana' => 10,
    'Paula' => 8,
    'João' => 1
  ];

  arsort($pontuacao);
  print_r($pontuacao);

?>

<table border=1>
  <tr>
    <th>Nome</th>
    <th>Pontuação</th>
  </tr>
  <?php foreach($pontuacao as $nome => $ponto): ?>
    <tr>
      <td><?= $nome; ?></td>
      <td><?= $ponto; ?></td>
    </tr>
  <?php endforeach; ?>
</table>