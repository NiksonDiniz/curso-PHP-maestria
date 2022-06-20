<div class="titulo">Conhecendo o break</div>

<ul>
  <li>Podemos sair de um loop while antes do seu fim;</li>
  <li>Para isso é necessário adicionar a instrução break;</li>
  <li>Após interpretada, o loop será automaticamente finalizado;</li>
  <li>Geralmente inserimos esta instrução em uma condição if;</li>
</ul>

<?php
  $x = 0;

  while($x <= 10){

    echo "o \$x é  $x <br>";

    if($x === 5){
      echo "Terminando o loop <br>";
      break;
    }

    $x++;
  }

  echo " Saiu do loop na condição do if <br>";
?>

<div class="titulo">A instrução continue</div>

<ul>
  <li>O continue pula uma execução do loop;</li>
  <li>Ou seja, quando o interpretador encontrar esta instrução, a próxima etapa do loop será executada;</li>
  <li>Novamente costumamos aplicar dentro de uma estrutura de condição;</li>
</ul>

<?php

  $a = 10;

  while($a > 0) {
    
    if($a === 5 || $a === 7){
      echo "pulou a execução <br>";

      // não esquecer do incremento ou decremento
      $a--;
      
      continue;
    }

    if($a === 2){
      echo "Para tudo";
      break;
    }
      
    echo "\$a = $a <br>";

    $a--;
  }