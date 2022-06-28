<div class="titulo">Exercício 49</div>

<ul>
  <li>Crie um array associativo com nomes e idades;</li>
  <li>Imprima estes dados em uma tabela de HTML;</li>
  <li>Dica: utilize as tags do elemento table</li>
</ul>

<?php

  $pessoas = [
    'Pedro' => 14,
    'João' => 18,
    'Maria' => 22,
    'Alice' => 16,
    'Marta' => 40
  ];
?>

<table border=2>
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  <?php foreach($pessoas as $nome => $idade): ?>
    <tr>
      <td><?= $nome; ?></td>
      <td><?= $idade; ?></td>
    </tr>
  <?php endforeach; ?>
</table>