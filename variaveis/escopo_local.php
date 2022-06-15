<div class="titulo">Variável Local</div>

<ul>
  <li>A variável local tem seu escopo definido dentro de uma função;</li>
  <li>Ela não é acessível fora da mesma;</li>
  <li>O seu valor sempre é resetado quando a função é finalizada;</li>
  <li>Obs: veremos funções em detalhes futuramente;</li>
</ul>

<?php
  $x = 10;

  echo "$x global <br>";

  function teste(){
    $x = 5;

    echo "$x local <br>";
  }

  teste();