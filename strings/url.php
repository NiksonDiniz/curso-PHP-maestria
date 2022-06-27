<div class="titulo">Decompor uma URL</div>

<ul>
  <li>Com a função parse_url podemos decompor uma URL;</li>
  <li>Vamos receber um array com todas as partes que a URL tem;</li>
  <li>Alguns elementos que podem ser retornados são: protocolo, host, parâmetros;</li>
</ul>

<?php

  $url = "https://www.google.com";

  $arrUrl = parse_url($url);

  print_r($arrUrl); # Array ( [scheme] => https [host] => www.google.com ) www.google.com
  echo "<br>";

  // host
  echo $arrUrl["host"] . "<br>";

  // exemplo 2

  $url2 = "http://www.google.com/busca=php";

  $arrUrl2 = parse_url($url2); # Array ( [scheme] => http [host] => www.google.com [path] => /busca=php )

  print_r($arrUrl2);
  echo "<br>";

  echo $arrUrl2["path"] . "<br>"; # /busca=php

  // exemplo 3

  $url3 = "http://www.google.com/usuario/niksond?id=11&nome=Nikson";

  $arrUrl3 = parse_url($url3);
  # Array ( [scheme] => http [host] => www.google.com [path] => /usuario/niksond [query] => id=11&nome=Nikson )

  print_r($arrUrl3);
  echo "<br>";

  echo $arrUrl3["path"] . "<br>"; # /usuario/niksond
