<div class="titulo">Explorando $_SERVER</div>

<ul>
  <li>Como dito anteriormente $_SERVER tem diversas informações importantes;</li>
  <li>SERVER_SOFTWARE => Identificação do servidor;</li>
  <li>SERVER_NAME => Hostname, DNS ou IP do servidor;</li>
  <li>SERVER_PROTOCOL => Protocolo do servidor;</li>
  <li>SERVER_PORT => Porta do servidor;</li>
  <li>QUERY_STRING => Argumentos após o ? na URL;</li>
</ul>

<?php

  include_once __DIR__ . "/../error.php";

  // print_r($_SERVER);
  // echo "<br>";


  // acessando firente valores do $_SERVER
  echo $_SERVER['SERVER_SOFTWARE'] . "<br>";
  echo $_SERVER['SERVER_NAME'] . "<br>";
  echo $_SERVER['SERVER_NAME'] . "<br>";

?>