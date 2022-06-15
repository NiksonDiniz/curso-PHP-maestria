<div class="titulo">Tipo Null</div>

<ul>
  <li>O tipo de dado Null tem apenas um valor, o NULL;</li>
  <li>Um caso de uso do Null seria checar se uma variável tem ou não valor;</li>
  <li>Podemos checar se um valor é null com is_null();</li>
</ul>

<?php
  echo NULL; # não imprime nada

  // é possível inicializar uma variável como NULL
  $nome = NULL;
  
  if(is_null($nome)){
    echo "O valor é nulo! <br>";
  }