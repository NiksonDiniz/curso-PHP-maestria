<div class="titulo">If Aninhado</div>

<ul>
  <li>Podemos também inserir um if dentro de outro;</li>
  <li>Neste caso o segundo bloco precisa apenas ficar dentro do primeiro if;</li>
  <li>Exemplo: <br>if(exp) {<br>if(exp) {<br>} <br>}</li>
</ul>

<?php

  if(10 > 2) {
    echo "Entrou no primeiro if. <br>";

    if("teste" == "teste"){
      echo "Entrou no segundo if. <br>";
    }
    
  }

  echo "<br>";

  if(10 > 2) {
    echo "Entrou no primeiro if. <br>";

    if("teste" != "teste"){
      echo "Entrou no segundo if. <br>";
    } else {
      echo "Entrou no segundo if como false. <br>";
    }

  } else {
    echo "Entrou no primeiro if como false. <br>";
  }