<div class="titulo">While</div>

<ul>
  <li>O while é uma estrutura de repetição, pode executar um código n vezes;</li>
  <li>Até satisfazer a sua condição;</li>
  <li>Geralmente é necessário um contador para atingir a condição;</li>
  <li>Exemplo:<br>while(condicao) {<br>código<br>}</li>
</ul>

<?php

  // definição do contador
  $x = 0;

  // enquanto x for menor que 10
  while($x < 10) {
    echo "$x <br>"; 
    # $x = $x + 1   
    $x++;
  }

  echo "<br>";

  // definição do contador
  $y = 0;

  // início / definição da estrutura
  while($y <= 10) {
    // corpo do loop
    echo $y . "<br>";

    // Incremento do contador
    # $y = $y + 2;
    $y+=2;
  }

  echo "<br>";

  // definição do contador
  $z = 10;

  // início / definição da estrutura
  while($z > 0) {
    // corpo do loop
    echo $z . "<br>";

    // decremento do contador
    $z--;
  }

  echo "<br>";

  // outro exemplo
  $a = 10;

  while($a > 0) {
    if($a % 2 !== 0) {
      echo $a . "<br>";
    }

    $a--;

  }