<div class="titulo">Atividade 27</div>

<ul>
  <li>Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes;</li>
  <li>Faça um loop while para exibir apenas os dados que são strings;</li>
</ul>

<?php
  $mix = ['banana', 1, 'Pica-pau', false, 'laranja', 'joia', 24, 80, true, 90, 'maçã'];

  $x = count($mix);
  $y = 0;

  // enquanto $y for meno que $x(tamanho do array)
  while($y < $x) {
    if(is_string($mix[$y]) === true){
      echo $mix[$y] . "<br>";
    }

    $y++;
  }