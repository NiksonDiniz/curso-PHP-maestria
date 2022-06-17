<div class="titulo">Atividade 13</div>

<ul>
  <li>Crie um arquivo PHP;</li>
  <li>Teste o operador de resto em duas divisões;</li>
  <li>Uma não exata e outra exata;</li>
</ul>

<?php
  $a = 10.0;
  $b = 20;
  $c = 30.0;
  $d = 40;

  $operacao1 = $a % $b;
  $operacao2 = $c % $d;
  $operacao3 = $d % $b;
  $subtracao = $c - $b;

  echo " $operacao1 <br>"; # 10
  echo " $operacao2 <br>"; # 30
  echo " $operacao3 <br>"; # 0

?>