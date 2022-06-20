<div class="titulo">A estrutura For</div>

<ul>
  <li>A for é com certeza a estrutura de repetição mais utilizada;</li>
  <li>Sua sintaxe é mais organizada, em apenas uma linha e aparenta ser mais difícil, ao primeiro olhar;</li>
  <li>Exemplo:<br>for(contador; condicao; incremento) {<br>codigo<br>}</li>
</ul>

<?php

  for($i = 0; $i < 10 ; $i++) {

    if($i == 4){
      echo "Dentro do primeiro if <br>";
    }

    if($i == 8 ){
      break;
    }
    
    echo "Elemento $i <br>";
  }
