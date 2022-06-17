<div class="titulo">Atividade 11</div>

<ul>
  <li>Crie um arquivo PHP;</li>
  <li>Teste a expressão “5” * 12;</li>
  <li>Utilize a função gettype() com o resultado como parâmetro para checar o tipo resultante da operação;</li>
</ul>

<?php
  $operacao = "5" * 12;
  echo "$operacao <br>"; # 60
  echo gettype($operacao) . "<br>"; # integer
  var_dump($operacao); # int(60)