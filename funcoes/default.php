<div class="titulo">Parâmetros default</div>

<ul>
  <li>Podemos passar parâmetros que já possuem um valor pré-determinado;</li>
  <li>Então caso você não passe este parâmetro, o valor default entra em cena;</li>
  <li>A função será executada normalmente com o valor definido;<br>function teste($a = “padrão”) {<br>// codigo<br>}</li>
</ul>

<?php

include_once __DIR__ . "/../error.php";

// com um parâmetro
  function teste($a = 'padrão'){
    echo "O valor de a: $a <br>";
  }

  teste();
  teste('elite');

// com dois parâmetro
  function testando($b, $a = 'x'){
    echo "O valor de a: $a e de b: $b.<br>";
  }

  # testando(); fatal error
// colocar os default sempre a direita(último)
  testando("1"); # O valor de a: x e de b: 1.


