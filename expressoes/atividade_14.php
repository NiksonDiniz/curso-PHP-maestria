<div class="titulo">Atividade 14</div>

<ul>
  <li>Crie um arquivo PHP;</li>
  <li>Crie uma variável saudação, nome e outra de sobrenome;</li>
  <li>Imprima com echo a concatenação de saudação, nome e sobrenome;</li>
</ul>

<?php
  $nome = 'Pedro';
  $sobrenome = 'Pereira';

  $saudacao = "Sr. " . $nome . " " . $sobrenome . ".";

  echo $saudacao;
?>