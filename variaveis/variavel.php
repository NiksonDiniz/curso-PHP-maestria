<div class="titulo">Variável de variável</div>

<ul>
  <li>Podemos criar uma variável por meio do nome de outra variável, com um valor diferente;</li>
  <li> O símbolo para esta função é o $$ | ex: $x = “teste”; | $$x = 5;</li>
  <li>Após a execução do código, a variável teste (conteúdo de $x), será criada com o valor 5;</li>
</ul>

<?php
  $x = 'nome';

  echo "$x <br>"; # nome

  $$x = 'Matheus';

  echo "$nome <br>"; # Matheus

  $$$x = ' Fontes';
  
  echo "$Matheus <br>"; # Fontes