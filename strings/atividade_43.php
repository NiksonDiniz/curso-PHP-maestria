<div class="titulo">Atividade 43</div>

<ul>
  <li>Converta a seguinte string para array:</li>
  <li>carro - navio - helicóptero - barco - jangada</li>
</ul>

<?php

  include_once __DIR__ . "/../error.php";

  $string = "carro - navio - helicóptero - barco - jangada";

  $stringArray = explode(" - ", $string);

  for($i = 0; $i < count($stringArray); $i++) {
    echo "Com for Item: $stringArray[$i] <br>";
  }

  echo "<br>";

  foreach( $stringArray as $palavra) {
    echo "Com foreach Item: $palavra <br>";
  }

?>